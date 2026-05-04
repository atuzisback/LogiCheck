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

    public function auth()
    {
        return redirect()->to(base_url('/'));
    }

    public function save()
    {
        return redirect()->to(base_url('login'));
    }

    // --- PERBAIKAN DI SINI ---
    public function ongkir()
    {
        // Pindahkan return ke dalam kurung kurawal fungsi
        return view('v_cek_ongkir');
    }

    public function dashboard()
    {
        // Pastikan nama file view sesuai
        return view('v_marketing_insights');
    }
}