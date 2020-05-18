<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;
use Coffast\Backoffice\Web\Models\Akun;

use Coffast\Backoffice\Web\Models\Menu; 

class AdminController extends Controller{
    public function indexAction(){
        $admin = $this->db->query("SELECT * FROM Akun where role = 2")->fetchAll();
        $this->view->setVars([
            'admin' => $admin,
        ]);
    	$this->view->pick('admin/listAdmin');
    }

    public function tambahAdminAction(){
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
        $user->flag = '1';
        $user->role = '2';
        $nama = Akun::findFirst("username = '$user->username'");
        if($nama){
            $this->flashSession->error("username sudah digunakan");
            return $this->response->redirect('/pemilik/admin');
        }
        else{
            $user->save();
            $this->response->redirect('/pemilik/admin');
        // }
        }     
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