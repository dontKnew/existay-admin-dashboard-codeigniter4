<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CitySliderModel;
use App\Models\FaqsModel;
use App\Models\PhotoGalleryModel;
use App\Models\StateApartmentModel;
use App\Models\StateModel;
use App\Models\TestimonialModel;

class CityController extends BaseController
{
    public function CityApartment($state2, $title){

        $state2 = (humanize($state2, '-'));

        $apartment = new StateApartmentModel();
        $apartment = $apartment->orderBy("id", "desc")
                    ->where(array("url_title"=>$title, "privacy"=>"public"))
                    ->first();

        $faqs = new FaqsModel();
        $testimonial = new TestimonialModel();
        $photo_gallery = new PhotoGalleryModel();
        $slider = new CitySliderModel();

        $faqs = $faqs->where(array("url_title"=>$title, "privacy"=>"public"))->orderBy("id", "desc")->find();
        $testimonial = $testimonial->where(array("url_title"=>$title, "privacy"=>"public"))->orderBy("id", "desc")->find();
        $photo_gallery = $photo_gallery->where(array("url_title"=>$title, "privacy"=>"public"))->orderBy("id", "desc")->find();
        $slider = $slider->where(array("url_title"=>$title, "privacy"=>"public"))->orderBy("id", "desc")->find();

        $data = [
            "apartment"=>$apartment,
            "state"=>$this->getState(),
            "faqs"=>$faqs,
            "testimonial"=>$testimonial,
            "photo_gallery"=>$photo_gallery,
            "slider"=>$slider,
        ];
        return view("city", $data);
    }
}
