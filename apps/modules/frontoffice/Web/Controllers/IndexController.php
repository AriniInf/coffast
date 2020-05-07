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
    }

    public function storeMenuAction(){
        $menus_array = explode(",", $this->request->getPost('menus'));
        $jumlahs_array = explode(",", $this->request->getPost('jumlahs'));
        //var_dump($jumlahs_array);
        for($i=0; $i<count($menus_array) ; $i++)
        {
            $item       = new Penjualan();
            $item->id_menu = $menus_array[$i];
            $item->jumlah = $jumlahs_array[$i];
            $item->waktu = date('d-m-Y');
            //var_dump($item);
            $item->save();
        }
       $this->response->redirect('/pelanggan/halaman');
    }
}
