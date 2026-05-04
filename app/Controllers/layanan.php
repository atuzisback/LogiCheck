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
public function ongkir()
    {
        // Menangkap data dari form input (Gambar ke-2)
        $asal = $this->request->getPost('asal');
        $tujuan = $this->request->getPost('tujuan');
        $berat = $this->request->getPost('berat');

        // Data simulasi hasil ekspedisi (untuk tampilan Gambar ke-1)
        // Nantinya data ini bisa kamu ambil dari API RajaOngkir atau database sendiri
        $data['hasil_ekspedisi'] = [
            [
                'kurir' => 'J&T Express',
                'layanan' => 'J&T EZ',
                'estimasi' => '-',
                'cod' => 'Tersedia',
                'jemput' => 'Pick Up',
                'tarif' => 61740,
                'coret' => 63000,
                'hemat' => true,
                'logo' => 'jt.png'
            ],
            [
                'kurir' => 'SPX',
                'layanan' => 'SPX Standard',
                'estimasi' => '5-12 Hari',
                'cod' => 'Tersedia',
                'jemput' => 'Pick Up',
                'tarif' => 63000,
                'coret' => 0,
                'hemat' => false,
                'logo' => 'spx.png'
            ],
            [
                'kurir' => 'Lion Parcel',
                'layanan' => 'Regpack',
                'estimasi' => '6-9 Hari',
                'cod' => 'Tidak Tersedia',
                'jemput' => 'Pick Up & Drop Off',
                'tarif' => 68528,
                'coret' => 72134,
                'hemat' => true,
                'logo' => 'lion.png'
            ]
        ];

        // Mengirim data inputan dan hasil ke view
        $data['pencarian'] = [
            'asal' => $asal,
            'tujuan' => $tujuan,
            'berat' => $berat
        ];

        // Pastikan file v_cek_ongkir.php ada di folder app/Views/
        return view('v_cek_ongkir', $data);
    }
    public function dashboard_insights()
{
    // Simulasi data untuk Analisis Pemasaran
    $data['marketing_stats'] = [
        'top_destination' => 'Surabaya',
        'avg_shipping_cost' => 15000,
        'most_used_courier' => 'J&T Express',
        'customer_satisfaction' => '4.8/5.0'
    ];

    // Data untuk grafik tren pengiriman (Analitik Pemasaran)
    $data['monthly_trends'] = [120, 150, 180, 240, 300]; 

    return view('v_marketing_insights', $data);
}
}
