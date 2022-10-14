<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StateModel;

class StateController extends BaseController
{
    public function index()
    {
        if($this->request->getPostGet()){
            $perPage = $this->request->getVar("per_page");
        }else {
            $perPage = 5;
        }
        $state =  new StateModel();
        $data = $state->orderBy("id", "desc")->paginate($perPage);
        $data = [
            "data"=>$data,
            'pager' => $state->pager,
            "state"=>"active",
            "page"=>"State",
            "perPage"=>$perPage
        ];
        return view ("admin/state/index", $data);
    }

    public function addPost(){
        if($this->request->getPostGet()){
            $session = session();
            $state = new StateModel();
            try {
                /*check image is valid or not*/
                $validationRule = [
                    'image' => [
                        'label' => 'State Photo',
                        'rules' => 'uploaded[image]'
                            . '|is_image[image]'
                            . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $session->setFlashdata("err","Please uploaded valid image");
                }else {
                    $realName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
                    $file = $this->request->getFile("image");
                    $randomName = $file->getRandomName();
                    $name = $realName."_".$randomName;
                    $name = strtolower($name);

                    /*compress image*/
                    $image = \Config\Services::image()
                        ->withFile($file)
                        ->withResource()
                        ->save('assets/admin/img/state/compress/' .$name,75);

                    /*after save compress image, save also origin file*/
                    $file->move("assets/admin/img/state/original/", $name);

                    $_POST['image'] =  $name;
                    $data = array_map("strtolower", $_POST);
                    $state->save($data);
                    $session->setFlashdata("msg","State added successfully");
                    return redirect("admin/state");
                }
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/state/add")->withInput();
        }
        $data = array(
            "state"=>"active",
            "page"=>"State",
        );
        return view("admin/state/add", $data);
    }

    public function editPost($id){
        $state =  new StateModel();
        $stateData = $state->find($id);
        $data = [
            "state"=>"active",
            "data"=>$stateData,
            "page"=>"State",
        ];
        return view("admin/state/update", $data);
    }

    public function updatePost(){
        if($this->request->getPostGet()){
            $session = session();
            $state = new StateModel();
            $data = $state->find($this->request->getVar("id"));
            try {
                if($_FILES['image']['name']!==""){
                    /*check image is valid or not*/
                    $validationRule = [
                        'image' => [
                            'label' => 'State Image',
                            'rules' => 'uploaded[image]'
                                . '|is_image[image]'
                                . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                        ],
                    ];
                    if (! $this->validate($validationRule)) {
                        $session->setFlashdata("err","Please uploaded valid image");
                    }else {
                        $realName = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
                        $file = $this->request->getFile("image");
                        $randomName = $file->getRandomName();
                        $name = $realName."_".$randomName;
                        $name = strtolower($name);

                        /*compress image*/
                        $image = \Config\Services::image()
                            ->withFile($file)
                            ->withResource()
                            ->save('assets/admin/img/state/compress/' .$name,75);

                        /*after save compress image, save also origin file*/
                        $file->move("assets/admin/img/state/original/", $name);
                        $_POST['image'] =  $name;
                        if(file_exists("assets/admin/img/state/original/".$data['image'])){
                            unlink("assets/admin/img/state/original/".$data['image']);
                            unlink("assets/admin/img/state/compress/".$data['image']);
                        }

                    }
                }else {
                    $_POST['image'] =  $data['image'];
                }
                $data = array_map("strtolower", $_POST);
                $state->update($data['id'], $data);
                $session->setFlashdata("msg","State updated successfully");
                return redirect("admin/state");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
    }

    public function deletePost($id)
    {
        $model = new StateModel();
        $image = $model->find($id);
        if(file_exists("assets/admin/img/state/original/".$image['image'])){
            unlink("assets/admin/img/state/original/".$image['image']);
            unlink("assets/admin/img/state/compress/".$image['image']);
        }

        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "State Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "State Could not delete");
        }
        return redirect("admin/state");
    }

}
