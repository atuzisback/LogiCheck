<?php

namespace App\Controllers;

class Logicheck extends BaseController
{
    public function index()
    {
        // Memanggil v_landing.php
        return view('v_landing');
    }

    public function login()
    {
        // Memanggil v_login.php yang sudah bertema Dark/Cyan
        return view('v_login');
    }

    public function register()
    {
        // Memanggil v_register.php yang sudah bertema Dark/Cyan
        return view('v_register');
    }

    // Fungsi tambahan untuk memproses data (Opsional sementara)
    public function auth()
    {
        // Logika pengecekan login akan di sini
        return redirect()->to(base_url('/'));
    }

    public function save()
    {
        // Logika penyimpanan data pendaftaran akan di sini
        return redirect()->to(base_url('login'));
    }
    public function ongkir()
{
    // Pastikan file v_cek_ongkir.php ada di folder app/Views/
    return view('v_cek_ongkir');
}
}