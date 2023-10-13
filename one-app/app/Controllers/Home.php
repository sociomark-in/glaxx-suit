<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($one,$two)
    {

        // echo $one . "-" . $two;
        return view('welcome_message');
    }
}
