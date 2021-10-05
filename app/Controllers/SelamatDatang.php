<?php
namespace App\Controllers;

/**
 * Created by VisualStudioCode
 * User : TrianJeneri
 * Date : 23/09/2021
 * Time : 15:47
 */
class SelamatDatang extends BaseController {

    public function hal_awal(){
        return 'hello saya belajar CI4';
    }

    public function beranda_login(){
        return view('halaman/login');
    }

    public function daftar_member(){
        return view('halaman/daftar_member');
    }
} 