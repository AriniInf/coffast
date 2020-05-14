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
        $pembelian = $this->db->query("SELECT * FROM Pembelian")->fetchAll();
        $barang = $this->db->query("SELECT * FROM Barang")->fetchAll();
        $this->view->setVars([
            'pembelian' => $pembelian,
            'barang' => $barang
        ]);
        // $this->view->pembelian=$pembelian;
        // $this->view->barang=$barang;
        $this->view->pick('pembelian/index');
        // var_dump($pembelian,$barang);
        // $this->view->disable();
    }
}