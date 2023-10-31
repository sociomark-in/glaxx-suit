<?php

namespace App\Controllers;

class PeopleController extends BaseController
{
    public $appName = "People";
    public $appVersion = "1.0.0-beta";


    public function index($one,$two)
    {
        $data['title'] = $this->appName;
        $data['page'] = "Dashboard";
        echo view('people/dashboard', $data);
    }


}
