<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Menu; 
use Coffast\Backoffice\Web\Models\Akun; 

class PegawaiController extends Controller{
    public function indexAction(){
    	$pegawai = $this->db->query("SELECT * FROM Akun where role = 3 AND flag = 1")->fetchAll();
        $this->view->setVars([
            'pegawai' => $pegawai,
        ]);
        if($this->session->get('auth')['role']==1){
            $this->view->pick('pegawai/pegawai');
        }
        else{
            $this->view->pick('pegawai/pegawaiAdmin');
        }
    }

    public function tambahPegawaiAction(){
        $user = new Akun();
        // $keluaran = "<br>";
        $user->username = $this->request->getPost('username');
        $user->nama = $this->request->getPost('nama');
        $user->email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user->password = $this->security->hash($password);
        $user->usia = $this->request->getPost('usia');
        $user->alamat = $this->request->getPost('alamat'); 
        $user->notelp = $this->request->getPost('notelp'); 
        $user->noiden = $this->request->getPost('noiden'); 
        $user->flag = '0';
        $user->role = '3';
        $nama = Akun::findFirst("username = '$user->username'");
        if($nama){
            $this->flashSession->error("username sudah digunakan");
            return $this->response->redirect('/admin/list-pegawai');
        }
        else{
            $user->save();
            $this->response->redirect('/admin/list-pegawai');
        // }
        }     
    }

    public function belumPegawaiAction(){
    	$pegawai = $this->db->query("SELECT * FROM Akun where role = 3 AND flag = 0")->fetchAll();
        $this->view->setVars([
            'pegawai' => $pegawai,
        ]);
        $this->view->pick('pegawai/belumPegawai');
    }

    public function validasiPegawaiAction(){
        $pegawai = Akun::findFirst($this->request->getPost('id'));
        $pegawai->flag = 1;
        $pegawai->update();
        $this->flashSession->success('pegawai berhasil diverifikasi');
        $this->response->redirect('/pemilik/list-pegawai');
    }
    public function dashboardAdminAction(){
    	$this->view->pick('admin/dashboard');
    }
}