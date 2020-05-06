<?php

namespace Coffast\Frontoffice\Web\Validator;

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Alnum;
use Phalcon\Validation\Validator\StringLength;
use Phalcon\Validation\Validator\Url;
use Phalcon\Validation\Validator\Regex as RegexValidation;

class AkunValidation extends Validation
{
    public function initialize()
    {
        $this->add(
            'username',
            new PresenceOf(
                [
                    'message' => 'Username tidak boleh kosong.',
                ]
            )
        );

        $this->add(
            'username',
            new Alnum(
                [
                    'message' => 'Username hanya boleh terdiri dari alfanumerik.'
                ]
            )
        );

        $this->add(
            'email',
            new PresenceOf(
                [
                    'message' => 'Email wajib diisi.',
                ]
            )
        );

        $this->add(
            'email',
            new Email(
                [
                    'message' => 'Email tidak valid.',
                ]
            )
        );

        $this->add(
            'nama',
            new PresenceOf(
                [
                    'message' => 'Nama tidak boleh kosong.',
                ]
            )
        );

        $this->add(
            'password',
            new PresenceOf(
                [
                    'message' => 'Password tidak boleh kosong.',
                ]
            )
        );

        $this->add('password', new RegexValidation([
            'message' => 'Password paling sedikit terdiri dari 8 karakter dan harus memiliki kombinasi huruf dan angka',

            'pattern' => '/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/',
        
        ]));

        // $this->add(
        //     'password',
        //     new StringLength(
        //         [
        //             'messageMinimum' => 'Password harus memiliki panjang lebih dari 8 karakter.',
        //             'min'            => 8,
        //             'messageMaximum' => 'Password harus memiliki panjang kurang dari 128 karakter.'
        //         ]
        //     )
        // );
    }
}