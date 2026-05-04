<?php

namespace App\Controllers;

class Logicheck extends BaseController
{
    public function index()
    {
        return view('v_landing');
    }

    public function login()
    {
        return view('v_login');
    }

    public function register()
    {
        return view('v_register');
    }

    // Fungsi untuk simulasi login
    public function auth()
    {
        // Untuk sementara, kita langsung arahkan ke dashboard marketing
        // Nantinya di sini kamu bisa menambahkan pengecekan username & password
        return redirect()->to(base_url('logicheck/dashboard'));
    }

    public function save()
    {
        // Setelah registrasi, arahkan ke login
        return redirect()->to(base_url('login'));
    }

    public function ongkir()
    {
        return view('v_cek_ongkir');
    }

    public function dashboard()
    {
        return view('v_marketing_insights');
    }
}