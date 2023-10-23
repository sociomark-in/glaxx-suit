<?php

namespace App\Controllers;

class RekrootController extends BaseController
{
    public $appName = "Rekroot";
    public $appVersion = "1.0.0-beta";

    public function index($one,$two)
    {
        $data['title'] = $this->appName;
        $data['page'] = "Home Page";
        return view('welcome_message', $data);
    }
}
