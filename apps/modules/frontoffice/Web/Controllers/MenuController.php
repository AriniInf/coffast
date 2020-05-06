<?php

namespace Coffast\Frontoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Frontoffice\Web\Models\Menu;

class MenuController extends Controller
{
    public function indexAction(){
        $makanan = $this->db->query("SELECT menu, harga, deskripsi FROM Menu where flag = 1")->fetchAll();
        $minuman = $this->db->query("SELECT menu, harga, deskripsi FROM Menu where flag = 0")->fetchAll();
        //var_dump($makanan);
        $this->view->setVars([
            'makanan' => $makanan,
            'minuman' => $minuman,
        ]); 
        //$this->view->disable();
    }

    public function cobaAction(){
        //echo "ini module front coba";
    }
}
