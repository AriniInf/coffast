<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;


class ErrorController extends Controller
{
    public function route404Action(){
        echo "error";
    }
}
