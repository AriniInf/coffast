<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Menu; 

class PegawaiController extends Controller{
    public function indexAction(){
    	$this->view->pick('pemilik/pegawai');
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