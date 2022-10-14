<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StateApartmentModel;
use App\Models\StateModel as State;
use App\Models\PhotoGalleryModel as Model;

class PhotoGalleryController extends BaseController
{
    public function index()
    {
        if($this->request->getVar("per_page")){
            $perPage = $this->request->getVar("per_page");
        }else {
            $perPage = 5;
        }
        $title = $this->request->getVar("apartment_title");
        $gallery =  new Model();
        if($title){
            $data = $gallery->where("apartment_title", $title)->orderBy("id", "desc")->paginate($perPage);
        }else {
            $data = $gallery->orderBy("id", "desc")->paginate($perPage);
        }
        $apartmentTitle = new StateApartmentModel();
        $apartmentTitle = $apartmentTitle->select("title")->findAll();
        $data = [
            "data"=>$data,
            'pager' => $gallery->pager,
            "gallery"=>"active",
            "page"=>"Gallery",
            "perPage"=>$perPage,
            "apartmentTitle"=>$apartmentTitle,
            "title"=>$title
        ];
        return view ("admin/gallery/index", $data);
    }

    public function addGallery(){
        if($this->request->getPostGet()){
            $session = session();
            $gallery = new Model();
            try {
                /*check image is valid or not*/
                $validationRule = [
                    'image' => [
                        'label' => 'Gallery Photo',
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
                        ->save('assets/admin/img/gallery/compress/' .$name,75);

                    /*after save compress image, save also origin file*/
                    $file->move("assets/admin/img/gallery/original/", $name);

                    $_POST['image'] =  $name;
                    $data = array_map("trim", $_POST);
                    $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);
                    $gallery->save($data);
                    $session->setFlashdata("msg","Photo added successfully");
                    return redirect("admin/gallery");
                }
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/gallery/add")->withInput();
        }
        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = array(
            "gallery"=>"active",
            "page"=>"Gallery",
            "title"=>$apartment
        );
        return view("admin/gallery/add", $data);
    }

    public function editGallery($id){
        $gallery =  new Model();
        $galleryData = $gallery->find($id);

        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = [
            "gallery"=>"active",
            "data"=>$galleryData,
            "page"=>"Gallery",
            "title"=>$apartment,
        ];
        return view("admin/gallery/update", $data);
    }

    public function updateGallery(){
        if($this->request->getPostGet()){
            $session = session();
            $gallery = new Model();
            $data = $gallery->find($this->request->getVar("id"));
            try {
                if($_FILES['image']['name']!==""){
                    /*check image is valid or not*/
                    $validationRule = [
                        'image' => [
                            'label' => 'Photo Image',
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
                            ->save('assets/admin/img/gallery/compress/' .$name,75);

                        /*after save compress image, save also origin file*/
                        $file->move("assets/admin/img/gallery/original/", $name);
                        $_POST['image'] =  $name;
                        unlink("assets/admin/img/gallery/original/".$data['image']);
                        unlink("assets/admin/img/gallery/compress/".$data['image']);
                    }
                }else {
                    $_POST['image'] =  $data['image'];
                }
                $data = array_map("trim", $_POST);
                $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);
                $gallery->update($this->request->getVar("id"), $data);
                $session->setFlashdata("msg","Photo updated successfully");
                return redirect("admin/gallery");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
    }

    public function deleteGallery($id)
    {
        $model = new Model();
        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "Photo Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "Photo Could not delete");
        }
        return redirect("admin/gallery");
    }

}
