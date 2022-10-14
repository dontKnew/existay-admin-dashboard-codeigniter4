<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\StateApartmentModel;
use App\Models\StateModel;
use App\Models\StateModel as State;
use App\Models\TestimonialModel as Model;

class TestimonialController extends BaseController
{
    public function index()
    {
        if($this->request->getVar("per_page")){
            $perPage = $this->request->getVar("per_page");
        }else {
            $perPage = 5;
        }
        $testimonial =  new Model();
        $title = $this->request->getVar("apartment_title");

        if($title){
            $data = $testimonial->where("apartment_title", $title)->orderBy("id", "desc")->paginate($perPage);
        }else {
            $data = $testimonial->orderBy("id", "desc")->paginate($perPage);
        }
        $apartmentTitle = new StateApartmentModel();
        $apartmentTitle = $apartmentTitle->select("title")->findAll();
        $data = [
            "data"=>$data,
            'pager' => $testimonial->pager,
            "testimonial"=>"active",
            "page"=>"Testimonial",
            "perPage"=>$perPage,
            "apartmentTitle"=>$apartmentTitle,
            "title"=>$title
        ];
        return view ("admin/testimonial/index", $data);
    }

    public function addTestimonial(){
        if($this->request->getPostGet()){
            $session = session();
            $testimonial = new Model();
            try {
                /*check image is valid or not*/
                $validationRule = [
                    'image' => [
                        'label' => 'Testimonial Photo',
                        'rules' => 'uploaded[image]'
                            . '|is_image[image]'
                            . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $session->setFlashdata("err","Please uploaded valid profile");
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
                        ->save('assets/admin/img/testimonial/compress/' .$name,75);

                    /*after save compress image, save also origin file*/
                    $file->move("assets/admin/img/testimonial/original/", $name);

                    $_POST['profile'] =  $name;
                    $data = array_map("trim", $_POST);
                    $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);
                    $testimonial->save($data);
                    $session->setFlashdata("msg","Testimonial added successfully");
                    return redirect("admin/testimonial");
                }
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/testimonial/add")->withInput();
        }
        $state = new StateModel();
        $state =  $state->orderBy("id", "desc")->findAll();

        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = array(
            "testimonial"=>"active",
            "page"=>"Testimonial",
            "title"=>$apartment,
            "state1"=>$state
        );
        return view("admin/testimonial/add", $data);
    }

    public function editTestimonial($id){
        $testimonial =  new Model();
        $testimonialData = $testimonial->find($id);

        $state = new StateModel();
        $state =  $state->orderBy("id", "desc")->findAll();

        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = [
            "testimonial"=>"active",
            "data"=>$testimonialData,
            "page"=>"Testimonial",
            "title"=>$apartment,
            "state1"=>$state
        ];
        return view("admin/testimonial/update", $data);
    }

    public function updateTestimonial(){
        if($this->request->getPostGet()){
            $session = session();
            $testimonial = new Model();
            $data = $testimonial->find($this->request->getVar("id"));
            try {
                if($_FILES['image']['name']!==""){
                    /*check image is valid or not*/
                    $validationRule = [
                        'image' => [
                            'label' => 'Testimonial Image',
                            'rules' => 'uploaded[image]'
                                . '|is_image[image]'
                                . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                        ],
                    ];
                    if (! $this->validate($validationRule)) {
                        $session->setFlashdata("err","Please uploaded valid profile");
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
                            ->save('assets/admin/img/testimonial/compress/' .$name,75);

                        /*after save compress image, save also origin file*/
                        $file->move("assets/admin/img/testimonial/original/", $name);
                        $_POST['profile'] =  $name;
                        unlink("assets/admin/img/testimonial/original/".$data['profile']);
                        unlink("assets/admin/img/testimonial/compress/".$data['profile']);
                    }
                }else {
                    $_POST['profile'] =  $data['profile'];
                }
                unset($_POST['image']);
                $data = array_map("trim", $_POST);
                $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);
                $testimonial->update($_POST['id'],$data);
                $session->setFlashdata("msg","Testimonial updated successfully");
                return redirect("admin/testimonial");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
    }

    public function deleteTestimonial($id)
    {
        $model = new Model();
        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "Testimonial Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "Testimonial Could not delete");
        }
        return redirect("admin/testimonial");
    }

}
