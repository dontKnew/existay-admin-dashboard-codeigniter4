<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdminModel;
use App\Models\CitySliderModel;
use App\Models\FaqsModel;
use App\Models\PhotoGalleryModel;
use App\Models\StateApartmentModel;
use App\Models\StateModel;
use App\Models\TestimonialModel;


class DashboardController extends BaseController
{
    public function index()
    {

        $title = $this->request->getVar("apartment_title");

        $apartment = new StateApartmentModel();
        $state = new StateModel();
        $faqs = new FaqsModel();
        $testimonial = new TestimonialModel();
        $photo_gallery = new PhotoGalleryModel();
        $slider = new CitySliderModel();
        $admin = new AdminModel();
        $apartmentTitle = $apartment->orderBy("id", "desc")->findAll();
        if($title){
            $data = [
                "dashboard"=>"active",
                "page"=>"Dashboard",
                "apartment"=>count($apartment->where("title", $title)->findAll()),
                "state"=>count($state->findAll()),
                "faqs"=>count($faqs->where("apartment_title",$title)->findAll()),
                "testimonial"=>count($testimonial->where("apartment_title",$title)->findAll()),
                "photo_gallery"=>count($photo_gallery->where("apartment_title",$title)->findAll()),
                "slider"=>count($slider->where("apartment_title",$title)->findAll()),
                "admin"=>count($admin->findAll()),
                "title"=>$title,
                "apartmentTitle"=>$apartmentTitle
            ];
        }else {
            $data = [
                "dashboard"=>"active",
                "page"=>"Dashboard",
                "apartment"=>count($apartmentTitle),
                "state"=>count($state->findAll()),
                "faqs"=>count($faqs->findAll()),
                "testimonial"=>count($testimonial->findAll()),
                "photo_gallery"=>count($photo_gallery->findAll()),
                "slider"=>count($slider->findAll()),
                "admin"=>count($admin->findAll()),
                "title"=>null,
                "apartmentTitle"=>$apartmentTitle
            ];
        }
        return view("admin/dashboard/index", $data);
    }
}
