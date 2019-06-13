<?php
/*
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 *
 * ---------------------------------------------------------------------------------------------------------------
 */

namespace app\Controllers;

// package untuk class HomeController

use app\Core\Controller; // alias namespace

// Controller class system
class HomeController extends Controller

{
	function __construct() // method yg sllu d pggil
    {
        $this->setheader('admin/header');
        $this->setfooter('admin/footer');
    }	
	  // method default
    // all class use methos index for method default
    // framework chatomz
    public function index()
    {
      $this->page('detailtransaksi');
    }


    public function coba()
    {
    	$this->view('rida');
    }
    public function profil()
    {
    	$data['siswa'] = $this->model('home')->datasiswa();
    	$this->page('profil', $data);
    }
 
    public function halamankategori()
    {
    	$data['kategori'] = $this->model('home')->daftarkategori();
    	$this->view('datakategori', $data);
    }
}