<?php

namespace Coffast\Backoffice\Web\Models;

use Phalcon\Mvc\Model;

class Penjualan extends Model
{
    public $id;
    public $id_booking;
    public $id_menu;
    public $total;
    public $jumlah;
    public $waktu;

    public function initialize()
    {
        $this->setSource('Penjualan');
    }
}