<?php

namespace Coffast\Backoffice\Web\Models;

use Phalcon\Mvc\Model;

class Pembelian extends Model
{
    public $id;
    public $pembelian;
    public $jumlah;
    public $total;
    public $id_akun;
    public $id_barang;
    public $waktu;

    public function initialize()
    {
        $this->setSource('Pembelian');
    }
}