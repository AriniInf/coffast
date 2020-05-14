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
        $menu = $this->db->query("SELECT * FROM Menu")->fetchAll();
        $this->view->setVars([
            'menu' => $menu,
            'penjualan' => $penjualan
        ]);
        // $this->view->pembelian=$pembelian;
        // $this->view->barang=$barang;
        $this->view->pick('penjualan/index');
        // var_dump($pembelian,$barang);
        // $this->view->disable();
    }
}