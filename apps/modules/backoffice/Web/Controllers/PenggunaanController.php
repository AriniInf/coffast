<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Penggunaan; 
use Coffast\Backoffice\Web\Models\Barang;

class PenggunaanController extends Controller
{
    public function indexAction(){
        $penggunaan = $this->db->query("SELECT penggunaan.id, barang, penggunaan.jumlah, waktu FROM Penggunaan join Barang ON barang.id = id_barang")->fetchAll();
        $barang = Barang::find();
        $this->view->setVars([
            'penggunaan' => $penggunaan,
            'barang' => $barang
        ]);
        $this->view->pick('penggunaan/index');
    }

    public function pegawaiIndexAction(){
        $penggunaan = $this->db->query("SELECT penggunaan.id, barang, penggunaan.jumlah, waktu FROM Penggunaan join Barang ON barang.id = id_barang")->fetchAll();
        $barang = Barang::find();
        $this->view->setVars([
            'penggunaan' => $penggunaan,
            'barang' => $barang
        ]);
        $this->view->pick('penggunaan/pegawai');
    }

    public function tambahPenggunaanAction(){
        $tanggal = $this->request->getPost('tanggal');
        $b = $this->request->getPost('barang');
        $jumlah = $this->request->getPost('jumlah');
        for($i=0; $i<count($b) ; $i++){
            $barang = Barang::findFirst([
            'conditions' => "id=".$b[$i].""
            ]);
            $penggunaan = new Penggunaan();
            $penggunaan->id_barang = $b[$i];
            $penggunaan->jumlah = $jumlah[$i];
            $penggunaan->waktu = $tanggal;
            $jumlah_barang = $barang->jumlah;
            $update = $this->db->query("UPDATE Barang SET jumlah = $jumlah_barang-$jumlah[$i] where id=$b[$i]");
            $penggunaan->save();
        }
        if ($this->session->get('auth')['role'] == 2 ){
            $this->response->redirect('admin/list-penggunaan');
        }
        else{
            $this->response->redirect('pegawai/list-penggunaan');
        }
    }

    public function editPenggunaanAction($id){
        $penggunaan = Penggunaan::findFirst($this->request->getPost('id'));
        $penggunaan->waktu = $this->request->getPost('tanggal');
        $penggunaan->jumlah = $this->request->getPost('jumlah');
        $penggunaan->update();
        if ($this->session->get('auth')['role'] == 2 ){
            $this->response->redirect('admin/list-penggunaan');
        }
        else{
            $this->response->redirect('pegawai/list-penggunaan');
        }
    }

}