<?php

namespace Coffast\Backoffice\Web\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Http\Request;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Mvc\Model\Query;

use Coffast\Backoffice\Web\Models\Menu; 


class MenuController extends Controller
{
    public function indexAction(){
        $menu = $this->db->query("SELECT * FROM Menu")->fetchAll();
        $this->view->setVars([
            'menu' => $menu,
            'kategori' => $kategori,
        ]);
        $this->view->pick('menu/index');
    }

    public function tambahMenuAction(){
        $dir = 'images/menu/';
	    $file = $dir . basename($_FILES['gambar']['name']);
        $filetmp = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($filetmp, $file);
	    echo '<pre>';
	    if ($upload)
	    {	  
            $img = $_FILES['gambar']['name']; 
            $menu = new Menu();
            $menu->menu = $this->request->getPost('menu');
            $menu->harga = $this->request->getPost('harga');
            $menu->deskripsi = $this->request->getPost('deskripsi');
            $menu->gambar = $img;   
            $menu->flag = $this->request->getPost('flag');

            if($menu->save()){
                $this->response->redirect('karyawan/menu');
            }
        }
    }

    public function editMenuAction(){
        $dir = 'images/menu/';
	    $file = $dir . basename($_FILES['gambar']['name']);
        $filetmp = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($filetmp, $file);
	    echo '<pre>';
	    if ($upload)    {	  
            $img = $_FILES['gambar']['name'];
            $id = $this->request->getPost('id');
            $menu = Menu::findFirst("id='$id'"); 
            $menu->menu = $this->request->getPost('menu');
            $menu->harga = $this->request->getPost('harga');
            $menu->deskripsi = $this->request->getPost('deskripsi');
            $menu->gambar = $img;  
                     
            if($menu->update()){
                $this->response->redirect('karyawan/menu');
            }
        }
    }

    public function hapusMenuAction($id){
        $this->db->query("delete from Menu where id='".$id."'");
        $this->flashSession->success('Menu berhasil dihapus');
        $this->response->redirect('/karyawan/menu');
    }

    public function cobaAction(){
        echo "ini module back coba";
    }
}
