<?php

namespace App\Controllers;
use App\Models\Panitia;
use App\Models\Idpanitia;
use CodeIgniter\Controller;

class Datapanitia extends Controller
{
    public function index()
    {
        $data['title'] = "Data Panitia";
        $data['activeMenu'] = "datapanitia";
        $userModel = new Panitia();
        $data['viewpanitia'] = $userModel->orderBy('nama', 'ASC')->findAll();

        $idpanitia = new Idpanitia();
        $data['idpanitia'] = $idpanitia->orderBy('seksi', 'ASC')->findAll();

        echo view("pages/header", $data);
        echo view("pages/navbar", $data);
        echo view("datapanitia", $data);
        echo view("pages/footer");
        
    }

     // insert data
     public function store() {
        $userModel = new Panitia();
        $data = [
            'nama' => $this->request->getVar('nama'),
            'cabang'  => $this->request->getVar('cabang'),
            'no_hp'  => $this->request->getVar('no_hp'),
            'seksi'  => $this->request->getVar('seksi'),
            'ket'  => $this->request->getVar('ket'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/datapanitia'));
    }

    // delete
    public function delete($id = null){
        $userModel = new Panitia();
        $data['user'] = $userModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/datapanitia'));
    }    

    // update user data
    public function update(){
        $userModel = new Panitia();
        $id = $this->request->getVar('id');
        $data = [
            'id' => $this->request->getVar('id'),
            'nama' => $this->request->getVar('nama'),
            'cabang'  => $this->request->getVar('cabang'),
            'no_hp'  => $this->request->getVar('no_hp'),
            'seksi'  => $this->request->getVar('seksi'),
            'ket'  => $this->request->getVar('ket'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/datapanitia'));
    }
}