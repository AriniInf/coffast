<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Penjualan; 
use Coffast\Backoffice\Web\Models\Menu;

class PenjualanController extends Controller
{
    public function indexAction(){
        $penjualan = $this->db->query("SELECT * FROM Penjualan")->fetchAll();
        $menu = Menu::find();
        $this->view->setVars([
            'menu' => $menu,
            'penjualan' => $penjualan
        ]);
        
        $this->view->pick('penjualan/index');
        
        
    }

    public function tambahPenjualanAction(){
        $menu = $this->request->getPost('menu');
        $jumlah = $this->request->getPost('jumlah');
        for($i=0; $i<count($menu) ; $i++)
        {
            $harga = Menu::findFirst([
            'conditions' => "id=".$menu[$i].""
            ]);
            // var_dump($harga);
            $item       = new Penjualan();
            $item->id_menu = $menu[$i];
            $item->jumlah = $jumlah[$i];
            $item->total = $jumlah[$i]*$harga->harga;
            $item->waktu = date('d-m-Y');
            // var_dump($item);
            $item->save();
        }
       $this->response->redirect('/pegawai/list-penjualan');
    }

}