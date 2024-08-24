<?php

namespace App\Controllers;
use App\Models\Qurban;
use CodeIgniter\Controller;

class Dataqurban extends Controller
{
    public function index()
    {
        $data['title'] = "Data Qurban";
        $data['activeMenu'] = "dataqurban";
        $viewqurban = new Qurban();
        $data['viewqurban'] = $viewqurban->orderBy('cabang', 'ASC')->findAll();

        echo view("pages/header", $data);
        echo view("pages/navbar", $data);
        echo view("dataqurban", $data);
        echo view("pages/footer");
        
    }
}