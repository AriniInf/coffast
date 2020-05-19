<?php

namespace Coffast\Backoffice\Web\Models;

use Phalcon\Mvc\Model;

class Penggunaan extends Model
{
    public $id;
    public $id_barang;
    public $jumlah;
    public $waktu;

    public function initialize()
    {
        $this->setSource('Penggunaan');
    }
}