<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Di;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Query;
use Phalcon\Mvc\View;
use Phalcon\Http\Response;
use Phalcon\Validation;
use Phalcon\Security;

use Coffast\Backoffice\Web\Form\LoginForm;
use Coffast\Backoffice\Web\Form\SignupForm;
use Coffast\Backoffice\Web\Models\Akun;

use Coffast\Backoffice\Web\Validator\AkunValidation;

/**
 * @property Di   $di
 * @property View $view
 */
class AkunController extends Controller 
{
    public function loginAction(){
        // if ($this->session->has('auth')){
        //     (new Response())->redirect('/pelanggan/ses')->send();
        // }
        $this->view->pick('akun/login');
    }

    public function signupAction(){
       $this->view->pick('akun/signup');
    }

    public function storeAction()
    {
        $user = new Akun();
        // $keluaran = "<br>";
        $user->username = $this->request->getPost('username');
        $user->nama = $this->request->getPost('nama');
        $user->email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user->password = $this->security->hash($password);
        $user->usia = $this->request->getPost('usia');
        $user->alamat = $this->request->getPost('alamat'); 
        $user->notelp = $this->request->getPost('notelp'); 
        $user->noiden = $this->request->getPost('noiden'); 
        $user->flag = '1';
        $user->role = '3';
        $nama = Akun::findFirst("username = '$user->username'");
        if($nama){
            $this->flashSession->error("username sudah digunakan");
            return $this->response->redirect('/register');
        }
        else{
            
            // if(count($this->validator->validate($_POST))){
            //     foreach ($this->validator->validate($_POST) as $message)
            //         $keluaran = $keluaran.$message. ' , ';
            //         //$this->view->message = $keluaran;
            //         $alamat = "/register/?alamat=".$keluaran;
            //         return $this->response->redirect($alamat);
            // }
            // else{
            
                $user->save();
                $this->flashSession->error("Anda telah berhasil mendaftar tunggu verifikasi dari admin");
                $this->response->redirect('/');
            // }
        }         
    }

    public function postloginAction()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $user = Akun::findFirst("username='$username'");

        if ($user) {
            if($user->flag==0){
                $this->response->redirect('/');
                $this->flashSession->error("Akun anda belum diverifikasi oleh admin");
            }
            else{
                if ($this->security->checkHash($password, $user->password)) {
                    $this->session->set(
                        'auth',
                        [
                            'id' => $user->id,
                            'username' => $user->username,
                            'role' => $user->role,
                        ]
                    );
                    if($user->role == 1){
                        $this->response->redirect('/pemilik/dashboard');
                    }
                    else if($user->role == 2){
                        $this->response->redirect('/admin/dashboard');
                    }
                    else if($user->role == 3){
                        $this->response->redirect('/karyawan/dashboard');
                    }
                }

                else {
                    $this->security->hash(rand());
                    $this->response->redirect('/');
                    $this->flashSession->error("Silahkan cek Username dan Password anda apakah sudah benar");   
                }
            }
        }
        else{
            $this->flashSession->error("Akun tidak ada"); 
            $this->response->redirect('/');
        }
    }

    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('/');
    }
}