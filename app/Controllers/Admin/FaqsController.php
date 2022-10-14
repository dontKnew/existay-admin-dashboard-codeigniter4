<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FaqsModel as Model;
use App\Models\StateApartmentModel;
use App\Models\StateModel;
use App\Models\StateModel as State;

class FaqsController extends BaseController
{
    public function index()
    {
        if($this->request->getVar("per_page")){
            $perPage = $this->request->getVar("per_page");
        }else {
            $perPage = 10;
        }
        $title = $this->request->getVar("apartment_title");
        $fqs =  new Model();
        if($title){
            $data = $fqs->where("apartment_title", $title)->orderBy("id", "desc")->paginate($perPage);
        }else {
            $data = $fqs->orderBy("id", "desc")->paginate($perPage);
        }
        $apartmentTitle = new StateApartmentModel();
        $apartmentTitle = $apartmentTitle->select("title")->findAll();
        $data = [
            "data"=>$data,
            'pager' => $fqs->pager,
            "faqs"=>"active",
            "page"=>"FAQS",
            "perPage"=>$perPage,
            "apartmentTitle"=>$apartmentTitle,
            "title"=>$title
        ];
        return view ("admin/faqs/index", $data);
    }

    public function addFaqs(){
        if($this->request->getPostGet()){
            $session = session();
            $fqs = new Model();
            try {
                $data = array_map("trim", $_POST);
                $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);
                $fqs->save($data);
                $session->setFlashdata( "msg","FAQ added successfully");
                return redirect("admin/faqs");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/faqs/add")->withInput();
        }
        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = array(
            "faqs"=>"active",
            "page"=>"FAQS",
            "title"=>$apartment
        );
        return view("admin/faqs/add", $data);
    }

    public function editFaqs($id){
        $fqs =  new Model();
        $fqsData = $fqs->find($id);
        $apartment = new StateApartmentModel();
        $apartment = $apartment->select("title")->orderBy("id", "desc")->findAll();
        $data = [
            "faqs"=>"active",
            "data"=>$fqsData,
            "page"=>"FAQS",
            "title"=>$apartment,
        ];
        return view("admin/faqs/update", $data);
    }

    public function updateFaqs(){
        if($this->request->getPostGet()){
            $session = session();
            $fqs = new Model();
            $data = $fqs->find($this->request->getVar("id"));
            try {
                $data = array_map("trim", $_POST);
                $data['url_title'] = $this->userFriendlyUrl($data['apartment_title']);

                $fqs->update($this->request->getVar("id"), $data);
                $session->setFlashdata("msg","FAQ updated successfully");
                return redirect("admin/faqs");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
            }
            return redirect("admin/faqs/edit/".$this->request->getVar('id'));
        }
    }

    public function deleteFaqs($id)
    {
        $model = new Model();
        $data = $model->delete($id);
        $session = session();
        if($data) {
            $session->setFlashdata('msg', "FAQ Deleted Successfully");
        }else {
            $session->setFlashdata('msg', "FAQ Could not delete");
        }
        return redirect("admin/faqs");
    }

}
