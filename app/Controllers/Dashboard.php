<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $data['activeMenu'] = "Dashboard";
        echo view("pages/header", $data);
        echo view("pages/navbar", $data);
        echo view("dashboard", $data);
        echo view("pages/footer");
        
    }
}