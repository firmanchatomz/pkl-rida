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
class AdminController extends Controller

{
	function __construct() // method yg sllu d pggi
    {
        $this->setheader('admin/header_staradmin');
        $this->setfooter('admin/footer_staradmin');
    }	
	  // method default
    // all class use methos index for method default
    // framework chatomz
   public function index()
   {
       $this->view('welcome');
   }


   public function lihatbarang()
   {
       $this->page('lihatbarang');
   }

   public function transaksi()
   {
       $this->page('transaksi');
   }

   public function member()
   {
       $this->page('member');
   }

   public function kategori()
   {
       $this->page('kategori');s
   }
}