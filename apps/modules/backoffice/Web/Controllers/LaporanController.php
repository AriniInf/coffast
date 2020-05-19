<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;


class LaporanController extends Controller
{
    public function indexAction(){
        $penjualan = $this->db->query("SELECT menu, penjualan.jumlah, penjualan.total From Penjualan join Menu ON menu.id = id_menu;")->fetchAll();
        $pembelian = $this->db->query("SELECT barang, pembelian.jumlah, pembelian.total From Pembelian join Barang ON barang.id = id_barang")->fetchAll();

        $this->view->setVars([
            'penjualan' => $penjualan,
            'pembelian' => $pembelian,
        ]);
    }

    public function printAction(){
        $penjualan = $this->db->query("SELECT menu, penjualan.jumlah, penjualan.total From Penjualan join Menu ON menu.id = id_menu;")->fetchAll();
        $pembelian = $this->db->query("SELECT barang, pembelian.jumlah, pembelian.total From Pembelian join Barang ON barang.id = id_barang")->fetchAll();

        $this->view->setVars([
            'penjualan' => $penjualan,
            'pembelian' => $pembelian,
        ]);
    }

}
