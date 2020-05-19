<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Pembelian; 
use Coffast\Backoffice\Web\Models\Barang;

class PembelianController extends Controller
{
    public function indexAction(){
        $pembelian = $this->db->query("SELECT pembelian.id, barang, pembelian.jumlah, waktu FROM Pembelian join Barang ON id_barang = barang.id ")->fetchAll();
        $barang = Barang::find();
        $this->view->setVars([
            'pembelian' => $pembelian,
            'barang' => $barang
        ]);
        
        $this->view->pick('pembelian/index');
    }

    public function pegawaiIndexAction(){
        $pembelian = $this->db->query("SELECT pembelian.id, barang, pembelian.jumlah, waktu FROM Pembelian join Barang ON id_barang = barang.id")->fetchAll();
        $barang = Barang::find();
        $this->view->setVars([
            'pembelian' => $pembelian,
            'barang' => $barang
        ]);
        $this->view->pick('pembelian/pegawai');
    }

    public function tambahPembelianAction(){
        $total = 0;
        $tanggal = $this->request->getPost('tanggal');
        $b = $this->request->getPost('id_barang');
        $jumlah = $this->request->getPost('jumlah');
        for($i=0; $i<count($b) ; $i++){
            $barang = Barang::findFirst([
            'conditions' => "id=".$b[$i].""
            ]);
            $pembelian = new Pembelian();
            //$pembelian->pembelian = $barang->barang;
            
            $pembelian->total = $barang->harga * $jumlah[$i];
            $total = $total + $pembelian->total;
            $pembelian->id_akun = $this->session->get('auth')['id'];
            $pembelian->jumlah = $jumlah[$i];  
            $pembelian->id_barang = $b[$i];
            $pembelian->waktu = $tanggal;
            // var_dump($pembelian);
            // $this->view->disable();
            $jumlah_barang = $barang->jumlah;
            $update = $this->db->query("UPDATE Barang SET jumlah = $jumlah_barang+$jumlah[$i] where id=$b[$i]");
            $pembelian->save();
        }
        if ($this->session->get('auth')['role'] == 2 ){
            $this->response->redirect('admin/list-pembelian');
        }
        else{
            $this->response->redirect('pegawai/list-pembelian');
        }
    }

     public function editPembelianAction($id){
        $pembelian = Pembelian::findFirst($this->request->getPost('id'));
        // $pembelian->pembelian = $this->request->getPost('barang');
        // $pembelian->id_akun = $this->request->getPost('id_akun');
        // $pembelian->id_barang = $this->request->getPost('id_barang');
        $pembelian->waktu = $this->request->getPost('tanggal');
        $pembelian->jumlah = $this->request->getPost('jumlah');
        $pembelian->update();
        if ($this->session->get('auth')['role'] == 2 ){
            $this->response->redirect('admin/list-pembelian');
        }
        else{
            $this->response->redirect('pegawai/list-pembelian');
        }
    }

}
