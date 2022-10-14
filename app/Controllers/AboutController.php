<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StateModel;
use App\Models\TestimonialModel;

class AboutController extends BaseController
{
    public function home()
    {

        $testimonial = new TestimonialModel();
        $testimonial = $testimonial->orderBy('id','desc')->findAll();
        $data = [
            "state"=>$this->getState(),
            "testimonial"=>$testimonial
        ];
        return view("about", $data);
    }
}
