<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Controllers\Home;
use App\Models\HomeModel;


class HomeController extends BaseController
{
    public function index()
    {
        $homeModel =  new HomeModel();
        $data = $homeModel->first();
        $data = [
            "data"=>$data,
            "home"=>"active",
            "page"=>"Home"
        ];

        return view ("admin/home/add", $data);
    }

    public function updateHome(){
        if($this->request->getPostGet()){
            $session = session();
            $homeModel = new HomeModel();
            $data = $homeModel->first();
            try {
                if($_FILES['image']['name']!==""){
                    /*check image is valid or not*/
                    $validationRule = [
                        'image' => [
                            'label' => 'Header Image',
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
                            ->save('assets/admin/img/home/compress/' .$name,75);

                        /*after save compress image, save also origin file*/
                        $file->move("assets/admin/img/home/original/", $name);
                        $_POST['header_image'] =  $name;
                        unlink("assets/admin/img/home/original/".$data['header_image']);
                        unlink("assets/admin/img/home/compress/".$data['header_image']);
                    }
                }else {
                    $_POST['header_image'] =  $data['header_image'];
                }

                $data = array_map("trim", $_POST);
                unset($data['image']);
                $id = $homeModel->first();
                $homeModel->update($id['id'], $data);
                $session->setFlashdata("msg","Home updated successfully");
                return redirect("admin/home");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
    }

}
