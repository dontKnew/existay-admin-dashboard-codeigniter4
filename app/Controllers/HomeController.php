<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\HomeModel;
use App\Models\StateApartmentModel;
use App\Models\StateModel;
use App\Models\TestimonialModel;

class HomeController extends BaseController
{
    public function home()
    {
        $state = new StateModel();
        $state = $state->orderBy("state", "asc")->findAll();

        $testimonial = new TestimonialModel();
        $testimonial = $testimonial->orderBy('id','desc')->findAll();

        $home = new HomeModel();
        $data = [
            "state"=>$this->getState(),
            "testimonial"=>$testimonial,
            "home"=>$home->first()
        ];

        return view("home", $data);
    }

    public function StateApartment($name){
        if($name!== ''){
            $name = trim($name);
            $name = humanize($name, '-');
            $state = new StateModel();
            $state = $state->select("*")->where("state", strtolower($name))->first();
            if($state){
                $apartment = new StateApartmentModel();
                $apartment = $apartment->select("*")
                    ->orderBy("id", "desc")
                    ->where(array("state"=>strtolower($name),"privacy"=>"public"))
                    ->find();

                $data = [
                    "state1"=>$state,
                    "apartment"=>$apartment,
                    "state"=>$this->getState()
                ];
                return view("state", $data);
            }else {
              return  redirect("home");
            }
        }else {
            return redirect("home");
        }
    }
}
