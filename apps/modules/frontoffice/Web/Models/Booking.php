<?php

namespace Coffast\Frontoffice\Web\Models;

use Phalcon\Mvc\Model;

class Booking extends Model
{
    public $id;
    public $id_akun;
    public $tanggal;
    public $waktu;
    public $jumlah;
    public $catatan;

    public function initialize()
    {
        $this->setSource('Booking');
    }
}