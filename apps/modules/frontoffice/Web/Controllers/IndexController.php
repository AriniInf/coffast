<?php

namespace Coffast\Frontoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;


class IndexController extends Controller
{
    public function indexAction(){
        $this->view->pick("template/without");

    }

    public function cobaAction(){
        //echo "ini module front coba";
    }
}