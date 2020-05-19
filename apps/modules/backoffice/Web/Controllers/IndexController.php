<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;


class IndexController extends Controller
{
    public function indexAction(){
        echo "ini module back";
    }

    public function cobaAction(){
        $this->view->pick('pdf/index');
    }


}
