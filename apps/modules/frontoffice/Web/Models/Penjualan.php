<?php

namespace Coffast\Frontoffice\Web\Models;

use Phalcon\Mvc\Model;

class Penjualan extends Model
{
    public $id;
    public $id_booking;
    public $id_menu;
    public $total;
    public $waktu;
    public $jumlah;

    public function initialize()
    {
        $this->setSource('Penjualan');
    }

}