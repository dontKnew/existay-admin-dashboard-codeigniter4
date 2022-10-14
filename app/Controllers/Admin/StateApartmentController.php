<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CitySliderModel;
use App\Models\PhotoGalleryModel;
use App\Models\StateModel as State;
use App\Models\StateApartmentModel as Model;

class StateApartmentController extends BaseController
{
    public function index()
    {
        if($this->request->getPostGet()){
            $perPage = $this->request->getVar("per_page");
        }else {
            $perPage = 5;
        }
        $apartment =  new Model();
        $data = $apartment->orderBy("id", "desc")->paginate($perPage);
        $data = [
            "data"=>$data,
            'pager' => $apartment->pager,
            "apartment"=>"active",
            "page"=>"Apartment",
            "perPage"=>$perPage
        ];
        return view ("admin/apartment/index", $data);
    }

    public function addApartment(){
        if($this->request->getPostGet()){
            $session = session();
            $apartment = new Model();
            try {
                $validationRule = [
                    'apartment_image' => [
                        'label' => 'Apartment Image',
                        'rules' => 'uploaded[apartment_image]'
                            . '|is_image[apartment_image]'
                            . '|mime_in[apartment_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    ],
                ];
                if (! $this->validate($validationRule)) {
                    $session->setFlashdata("err","Please uploaded valid  apartment image");
                }else {
                    $realName = pathinfo($_FILES['apartment_image']['name'], PATHINFO_FILENAME);
                    $file = $this->request->getFile("apartment_image");
                    $randomName = $file->getRandomName();
                    $name = $realName."_".$randomName;
                    $name = strtolower($name);

                    /*compress apartment_image*/
                    $apartment_image = \Config\Services::image()
                        ->withFile($file)
                        ->withResource()
                        ->save('assets/admin/img/apartment/compress/' .$name,75);

                    /*after save compress apartment_image, save also origin file*/
                    $file->move("assets/admin/img/apartment/original/", $name);
                    $_POST['apartment_image'] =  $name;
                }

                $data = array_map("trim", $_POST);
                $data['state'] = strtolower($data['state']);
                $data['state_area'] = strtolower($data['state_area']);

                $data['url_title'] = $this->userFriendlyUrl($data['title']);

                $apartment->save($data);
                $session->setFlashdata("msg","Apartment added successfully");
                return redirect("admin/apartment");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/apartment/add")->withInput();
        }

        /*city slider */
            if($this->request->getPostGet()){
                $perPage = $this->request->getVar("per_page");
            }else {
                $perPage = 5;
            }
            $slider =  new CitySliderModel();
            $data = $slider->orderBy("id", "desc")->paginate($perPage);
        /*end city slider*/

        /*state */
        $state = new State();
        $state =  $state->orderBy("id", "desc")->findAll();
        /*end state*/

        /*photo gallery*/
            if($this->request->getPostGet()){
                $perPage1 = $this->request->getVar("per_page1");
            }else {
                $perPage1 = 5;
            }
            $gallery =  new PhotoGalleryModel();
            $gallery1 = $gallery->orderBy("id", "desc")->paginate($perPage1);
        /*end photo gallery*/

        $data = array(
            "apartment"=>"active",
            "page"=>"Apartment",
            "state1"=>$state,

            "perPage"=>$perPage,
            'pager' => $slider->pager,
            "data"=>$data,

            'pager1' => $gallery->pager,
            "perPage1"=>$perPage,
            "gallery1"=>$gallery1,
        );
        return view("admin/apartment/add", $data);
    }

    public function editApartment($id){
        $apartment =  new Model();
        $apartmentData = $apartment->find($id);

        $state = new State();
        $state =  $state->orderBy("id", "desc")->findAll();
        $data = [
            "apartment"=>"active",
            "data"=>$apartmentData,
            "page"=>"Apartment",
            "data1"=>$state
        ];
        return view("admin/apartment/update", $data);
    }

    public function updateApartment(){
        if($this->request->getPostGet()){
            $session = session();
            $apartment = new Model();
            $data = $apartment->find($this->request->getVar("id"));

            try {
                if($_FILES['apartment_image']['name']!==""){
                    /*check image is valid or not*/
                    $validationRule = [
                        'image' => [
                            'label' => 'Apartment Image',
                            'rules' => 'uploaded[apartment_image]'
                                . '|is_image[apartment_image]'
                                . '|mime_in[apartment_image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                        ],
                    ];
                    if (! $this->validate($validationRule)) {
                        $session->setFlashdata("err","Please uploaded valid apartment image");
                    }else {
                        $realName = pathinfo($_FILES['apartment_image']['name'], PATHINFO_FILENAME);
                        $file = $this->request->getFile("apartment_image");
                        $randomName = $file->getRandomName();
                        $name = $realName."_".$randomName;
                        $name = strtolower($name);

                        /*compress image*/
                        $apartment_image = \Config\Services::image()
                            ->withFile($file)
                            ->withResource()
                            ->save('assets/admin/img/apartment/compress/' .$name,75);

                        /*after save compress image, save also origin file*/
                        $file->move("assets/admin/img/apartment/original/", $name);
                        $_POST['apartment_image'] =  $name;
                        if(file_exists("assets/admin/img/apartment/original/".$data['apartment_image'])){
                            unlink("assets/admin/img/apartment/original/".$data['apartment_image']);
                            unlink("assets/admin/img/apartment/compress/".$data['apartment_image']);
                        }
                    }
                }else {
                    $_POST['apartment_image'] =  $data['apartment_image'];
                }

                $data = array_map("trim", $_POST);
                $data['state'] = strtolower($data['state']);
                $data['state_area'] = strtolower($data['state_area']);
                $data['url_title'] = $this->userFriendlyUrl($data['title']);

                $apartment->update($data['id'], $data);
                $session->setFlashdata("msg","Apartment updated successfully");
                return redirect("admin/apartment");
            }catch (\Exception $e){
             $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect()->back();
        }
    }

    public function deleteApartment($id)
    {
        $model = new Model();

        $image = $model->find($id);
        if(file_exists("assets/admin/img/apartment/original/".$image['apartment_image'])){
            unlink("assets/admin/img/apartment/original/".$image['apartment_image']);
            unlink("assets/admin/img/apartment/compress/".$image['apartment_image']);
        }
        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "Apartment Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "Apartment Could not delete");
        }
        return redirect("admin/apartment");
    }

}
