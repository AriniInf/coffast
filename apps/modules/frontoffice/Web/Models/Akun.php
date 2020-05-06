<?php

namespace Coffast\Frontoffice\Web\Models;

use Phalcon\Mvc\Model;

class Akun extends Model
{
    public $username;
    public $noiden;
    public $password;
    public $nama;
    public $email;
    public $alamat;
    public $notelp;
    public $flag;
    public $role;

    public function initialize()
    {
        $this->setSource('Akun');
    }
}