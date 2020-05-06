<?php

namespace Coffast\Frontoffice\Web\Models;

use Phalcon\Mvc\Model;

class Menu extends Model
{
    public $id;
    public $menu;
    public $harga;
    public $deskripsi;
    public $gambar;
    public $flag;

    public function initialize()
    {
        $this->setSource('Menu');
    }
}