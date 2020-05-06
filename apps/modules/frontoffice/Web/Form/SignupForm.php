<?php

namespace Coffast\Frontoffice\Web\Form;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Submit;

use Coffast\Frontoffice\Web\Validator\AkunValidation;
use Coffast\Frontoffice\Web\Form\BaseForm;

class SignupForm extends BaseForm {
    public function initialize()
    {
        $this->add(
            new Text(
                'nama',
                [
                    'placeholder' => 'Nama',
                    'class'       => 'fadeIn first'
                ]
            )
        );
        
        $this->add(
            new Text(
                'username',
                [
                    'placeholder' => 'Username',
                    'class'       => 'fadeIn second'
                ]
            )
        );

        $this->add(
            new Text(
                'email',
                [
                    'placeholder' => 'Email',
                    'class'       => 'fadeIn third'
                ]
            )
        );

        $this->add(
            new Password(
                'password',
                [
                    'placeholder' => 'Password',
                    'class'       => 'fadeIn third'
                ]
            )
        );


        $this->add(
            new Submit (
                'Daftar',
                [
                    'name' => 'signup',
                    "class" => "fadeIn fourth"

                ]
            )
        );
        
        $this->setUserOptions([
            'method'=> 'POST',
            'class' => 'signupForm'
        ]);

        $this->setValidation(new AkunValidation());
        
    }
}