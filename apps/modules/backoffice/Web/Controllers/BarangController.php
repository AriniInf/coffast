<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Barang;

class BarangController extends Controller
{
    public function indexAction(){
    	$barang = $this->db->query("SELECT * from Barang")->fetchAll();
    	$this->view->barang = $barang;
        $this->view->pick('barang/index');
    }

    public function tambahBarangAction(){
        $barang = new Barang();
        $barang->barang = $this->request->getPost('barang');
        $barang->harga = $this->request->getPost('harga');
        $barang->deskripsi = $this->request->getPost('deskripsi');
        $barang->jumlah = $this->request->getPost('jumlah'); 
        //var_dump($barang);
        $barang->save();
        $this->response->redirect('admin/list-barang');

    }

     public function editBarangAction($id){
        // $barang = Barang::findFirstByidBarang($id);
        $conditions = ['id'=>$id];
        $barang = Barang::findFirst([
            'conditions' => 'id=:id:',
            'bind' => $conditions,
        ]);
        $barang->barang = $this->request->getPost('barang');
        $barang->harga = $this->request->getPost('harga');
        $barang->deskripsi = $this->request->getPost('deskripsi');
        $barang->jumlah = $this->request->getPost('jumlah');
        //var_dump($barang);
        $barang->save();
        $this->response->redirect('admin/list-barang');
    }

    public function hapusBarangAction($id){
        // $barang = Barang::findFirstByidBarang($id);
        $this->db->query("delete from Barang where id='".$id."'");
        $this->response->redirect('admin/list-barang');
    }
}


