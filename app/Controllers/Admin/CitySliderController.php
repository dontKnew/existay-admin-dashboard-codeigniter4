<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StateApartmentModel;
use App\Models\StateApartmentModel as State;
use App\Models\CitySliderModel as Model;
use App\Models\StateModel;

class CitySliderController extends BaseController
{
    public function index()
    {

        if($this->request->getVar("per_page")){
            $perPage = $this->request->getVar("per_page");
        }else {
            $perPage = 5;
        }
        $title = $this->request->getVar("apartment_title");
        $slider =  new Model();

        if($title){
            $data = $slider->where("apartment_title", $title)->orderBy("id", "desc")->paginate($perPage);
        }else {
            $data = $slider->orderBy("id", "desc")->paginate($perPage);
        }
        $apartmentTitle = new StateApartmentModel();
        $apartmentTitle = $apartmentTitle->select("title")->findAll();
        $data = [
            "data"=>$data,
            'pager' => $slider->pager,
            "slider"=>"active",
            "page"=>"City-Slider",
            "perPage"=>$perPage,
            "apartmentTitle"=>$apartmentTitle,
            "title"=>$title
        ];
        return view ("admin/city_slider/index", $data);
    }

    public function addSlider(){
        if($this->request->getPostGet()){
            $session = session();
            $slider = new Model();
            try {
                /*check image is valid or not*/
                $validationRule = [
                    'image' => [
                        'label' => 'Slider Photo',
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
                        ->save('assets/admin/img/city_slider/compress/' .$name,75);

                    /*after save compress image, save also origin file*/
                    $file->move("assets/admin/img/city_slider/original/", $name);

                    $_POST['image'] =  $name;
                    $data = array_map("trim", $_POST);
                    $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);

                    $slider->save($data);
                    $session->setFlashdata("msg","Photo added successfully");
                    return redirect("admin/slider");
                }
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/slider/add")->withInput();
        }
        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = array(
            "slider"=>"active",
            "page"=>"City-Slider",
            "title"=>$apartment,
        );
        return view("admin/city_slider/add", $data);
    }

    public function editSlider($id){
        $slider =  new Model();
        $sliderData = $slider->find($id);

        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = [
            "slider"=>"active",
            "data"=>$sliderData,
            "page"=>"City-Slider",
            "title"=>$apartment,
        ];
        return view("admin/city_slider/update", $data);
    }

    public function updateSlider(){
        if($this->request->getPostGet()){
            $session = session();
            $slider = new Model();
            $data = $slider->find($this->request->getVar("id"));
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
                            ->save('assets/admin/img/city_slider/compress/' .$name,75);

                        /*after save compress image, save also origin file*/
                        $file->move("assets/admin/img/city_slider/original/", $name);
                        $_POST['image'] =  $name;
                        if(file_exists("assets/admin/img/city_slider/original/".$data['image'])){
                            unlink("assets/admin/img/city_slider/original/".$data['image']);
                            unlink("assets/admin/img/city_slider/compress/".$data['image']);
                        }
                    }
                }else {
                    $_POST['image'] =  $data['image'];
                }
                $data = array_map("trim", $_POST);
                $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);
                $slider->update($this->request->getVar("id"), $data);
                $session->setFlashdata("msg","Photo updated successfully");
                return redirect("admin/slider");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
    }

    public function deleteSlider($id)
    {
        $model = new Model();
        $image =$model->find($id);
        if(file_exists("assets/admin/img/city_slider/original/".$image['image'])){
            unlink("assets/admin/img/city_slider/original/".$image['image']);
            unlink("assets/admin/img/city_slider/compress/".$image['image']);
        }
        $data = $model->delete($id);

        $session = session();
        if($data) {
            $session->setFlashdata('msg', "Photo Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "Photo Could not delete");
        }
        return redirect("admin/slider");
    }

}
