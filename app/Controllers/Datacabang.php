<?php

namespace App\Controllers;
use App\Models\Cabang;
use CodeIgniter\Controller;

class Datacabang extends Controller
{
    public function index()
    {
        $data['title'] = "Data Cabang";
        $data['activeMenu'] = "datacabang";
        $viewcabang = new Cabang();
        $data['viewcabang'] = $viewcabang->orderBy('cabang', 'ASC')->findAll();

        echo view("pages/header", $data);
        echo view("pages/navbar", $data);
        echo view("datacabang", $data);
        echo view("pages/footer");
        
    }

    // insert data
    public function store() {
        $userModel = new Cabang();
        $data = [
            'cabang'  => $this->request->getVar('cabang'),
            'ketua_cabang'  => $this->request->getVar('ketua_cabang'),
            'no_hp'  => $this->request->getVar('no_hp'),
            'panitia_qurban'  => $this->request->getVar('panitia_qurban'),
            'no2_hp'  => $this->request->getVar('no2_hp'),
            'alamat'  => $this->request->getVar('alamat'),
            'perwakilan'  => $this->request->getVar('perwakilan'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/datacabang'));
    }

    // delete
    public function delete($id = null){
        $userModel = new Cabang();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/datacabang'));
    }    

    // update user data
    public function update(){
        $userModel = new Cabang();
        $id = $this->request->getVar('id');
        $data = [
            'id'  => $this->request->getVar('id'),
            'cabang'  => $this->request->getVar('cabang'),
            'ketua_cabang'  => $this->request->getVar('ketua_cabang'),
            'no_hp'  => $this->request->getVar('no_hp'),
            'panitia_qurban'  => $this->request->getVar('panitia_qurban'),
            'no2_hp'  => $this->request->getVar('no2_hp'),
            'alamat'  => $this->request->getVar('alamat'),
            'perwakilan'  => $this->request->getVar('perwakilan'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/datacabang'));
    }
}