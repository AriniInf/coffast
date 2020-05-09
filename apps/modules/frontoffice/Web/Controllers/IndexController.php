<?php

namespace Coffast\Frontoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;
use Coffast\Frontoffice\Web\Models\Menu;
use Coffast\Frontoffice\Web\Models\Akun;
use Coffast\Frontoffice\Web\Models\Booking;
use Coffast\Frontoffice\Web\Models\Penjualan;

class IndexController extends Controller
{
    public function indexAction(){
        $makanan = $this->db->query("SELECT menu, harga, deskripsi, gambar FROM Menu where flag = 1")->fetchAll();
        $minuman = $this->db->query("SELECT menu, harga, deskripsi , gambar FROM Menu where flag = 0")->fetchAll();
        //var_dump($makanan);
        $this->view->setVars([
            'makanan' => $makanan,
            'minuman' => $minuman,
        ]); 
        $this->view->pick("halaman/belummasuk");

    }

    public function halamanAction(){
        $makanan = $this->db->query("SELECT menu, harga, deskripsi, gambar FROM Menu where flag = 1")->fetchAll();
        $minuman = $this->db->query("SELECT menu, harga, deskripsi, gambar FROM Menu where flag = 0")->fetchAll();
        $spesial = $this->db->query("SELECT TOP 3 menu, harga, deskripsi, gambar FROM Menu")->fetchAll();
        //var_dump($makanan);
        $this->view->setVars([
            'makanan' => $makanan,
            'minuman' => $minuman,
            'spesial' => $spesial,
        ]); 
        //echo "ini module front coba";
        $this->view->pick('index/halaman');
    }

    public function bookAction(){
        $menu = $this->db->query("SELECT id, menu, harga, deskripsi, gambar FROM Menu")->fetchAll();
        $book = new Booking();
        $book->id_akun = $this->session->get('auth')['id'];
        $book->tanggal = $this->request->getPost('tanggal');
        $book->waktu = $this->request->getPost('waktu');
        $book->jumlah = $this->request->getPost('jumlah');
        $book->catatan = $this->request->getPost('catatan');
        if($book->save()){
            return $this->response->redirect('/pelanggan/add-menu');
        }
        $this->view->setVars([
            'menu' => $menu,
        ]); 
    }

    public function addMenuAction(){
        $menu = Menu::find();
        $this->view->menu = $menu; 
        $this->view->pick ('index/addMenu');
    }

    public function storeMenuAction(){

        $id_booking = $this->db->query("SELECT TOP 1 id from Booking order by id desc")->fetch();
        // var_dump($id_booking);
        $menu = $this->request->getPost('menu');
        $jumlah = $this->request->getPost('jum');
       
        for($i=0; $i<count($menu) ; $i++)
        {
            $harga = Menu::findFirst([
            'conditions' => "id=".$menu[$i].""
            ]);
            // var_dump($harga);
            $item       = new Penjualan();
            $item->id_booking = $id_booking;
            $item->id_menu = $menu[$i];
            $item->jumlah = $jumlah[$i];
            $item->total = $jumlah[$i]*$harga->harga;
            $item->waktu = date('d-m-Y');
            // var_dump($item);
            $item->save();
        }
       $this->response->redirect('/pelanggan/halaman');
    }
}
