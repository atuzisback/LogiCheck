<?php

namespace App\Controllers;

use CodeIgniter\HTTP\CURLRequest;

class Layanan extends BaseController
{
    public function cekOngkir()
{
    // Ambil data dari input form
    $asal   = $this->request->getPost('asal');
    $tujuan = $this->request->getPost('tujuan');
    $berat  = $this->request->getPost('berat');

    // Data Dummy (Nanti bagian ini yang akan diganti dengan data dari API Binderbyte/RajaOngkir)
    $hasil_dummy = [
        [
            'service' => 'J&T EZ',
            'etd'     => '2-3',
            'cost'    => 36400,
            'logo'    => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/92/J%26T_Express_logo.svg/1200px-J%26T_Express_logo.svg.png'
        ],
        [
            'service' => 'JNE REG',
            'etd'     => '1-2',
            'cost'    => 40000,
            'logo'    => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/JNE_Express_logo.svg/1200px-JNE_Express_logo.svg.png'
        ],
        [
            'service' => 'SiCepat REG',
            'etd'     => '2-4',
            'cost'    => 35000,
            'logo'    => 'https://upload.wikimedia.org/wikipedia/commons/4/41/Sicepat_logo.png'
        ]
    ];

    $data = [
        'title'  => 'LogiCheck - Smart Logistics',
        'asal'   => $asal,
        'tujuan' => $tujuan,
        'berat'  => $berat,
        'hasil'  => $hasil_dummy // Mengirim data ke view
    ];

    // PENTING: Kembalikan ke view 'v_landing', bukan 'v_hasil_ongkir'
    return view('v_landing', $data);
}
}