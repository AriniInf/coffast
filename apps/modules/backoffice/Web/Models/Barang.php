<?php

namespace Coffast\Backoffice\Web\Models;

use Phalcon\Mvc\Model;

class Barang extends Model
{
    public $id;
    public $barang;
    public $harga;
    public $deskripsi;
    public $jumlah;

    public function initialize()
    {
        $this->setSource('Barang');
    }
}