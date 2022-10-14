<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/admin/login');
    }

    public function adminLogin(){
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect('admin/dashboard');
            }else{
                $session->setFlashdata('err', 'Please enter the correct Password');
                return redirect('admin/login');
            }
        }else{
            $session->setFlashdata('err', 'This Email is not registered us');
            return redirect('admin/login');
        }
    }

    public function changePassword(){

        if($this->request->getMethod()=="post"){
            $session = session();
            $id = $session->get('id');
            $password = $this->request->getVar('password');
            $cpassword = $this->request->getVar('cpassword');

            if($password == $cpassword){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $model = new AdminModel();
                try {
                    if($model->update($id, array("password"=>$password))){
                        $session->setFlashdata('msg', 'Password has been changed');
                    }else {
                        $session->setFlashdata('err', 'Password could not change');
                    }
                    return redirect('admin/change-password');
                }catch(Exception $e){
                    $session->setFlashdata('msg', 'Error :'.$e->getMessage());
                    return redirect('admin/change-password');
                }

            }else {
                $session->setFlashdata('err', 'Please enter same password');
                return redirect('admin/change-password');
            }

        }
        $data= [
            "change_password"=>"active",
            "page"=>"change_password"
        ];
        return view("admin/admin/change-password", $data);
    }

    public function adminProfile(){
        if($this->request->getPostGet()){
            $session = session();
            $id = $session->get('id');
            $_POST['id'] = $id;
            $fqs = new AdminModel();
            $data = $fqs->find($id);
            try {
                $data = array_map("trim", $_POST);
                $fqs->update($id, $data);
                $session->setFlashdata("msg","Profile updated successfully");
                return redirect("admin/profile");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
        $session = session();
        $id = $session->get('id');
        $admin = new AdminModel();
        $data = $admin->find($id);
        $data= [
            "data"=>$data,
            "profile"=>"active",
            "page"=>"Profile"
        ];
        return view("admin/admin/profile",$data);
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect('admin/login');
    }
}
