<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StateModel;

class LoginController extends BaseController
{
    public function home()
    {
        $data = [
            "state"=>$this->getState()
        ];
        return view("login", $data);
    }
}
