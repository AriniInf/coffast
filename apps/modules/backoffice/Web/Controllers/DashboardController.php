<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Menu; 

class DashboardController extends Controller{
    public function dashboardPegawaiAction(){
        $favorit = $this->db->query('SELECT TOP 1 menu, count(id_menu) as jual, sum(jumlah) as jumlah from Penjualan join Menu ON menu.id = id_menu group by menu order by jumlah DESC')->fetchAll();
        $this->view->setVars([
            'favorit' => $favorit,
        ]);
        //$this->view->pick('pegawai/dashboard');
    }
    public function dashboardAdminAction(){
        $favorit = $this->db->query('SELECT TOP 1 menu, count(id_menu) as jual, sum(jumlah) as jumlah from Penjualan join Menu ON menu.id = id_menu group by menu order by jumlah DESC')->fetchAll();
        $this->view->setVars([
            'favorit' => $favorit,
        ]);
    	//$this->view->pick('admin/dashboard');
    }
    public function dashboardPemilikAction(){
        $favorit = $this->db->query('SELECT TOP 1 menu, count(id_menu) as jual, sum(jumlah) as jumlah from Penjualan join Menu ON menu.id = id_menu group by menu order by jumlah DESC')->fetchAll();
        $this->view->setVars([
            'favorit' => $favorit,
        ]);
    	//$this->view->pick('pemilik/dashboard');
    }
}