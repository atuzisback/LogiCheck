<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkir | LogiCheck</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk icon panah -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-dark-custom { background-color: #020617; }
    </style>
</head>
<body class="bg-dark-custom text-white overflow-x-hidden">

<div class="max-w-7xl mx-auto px-6 py-12 lg:py-20 relative">
    <!-- Dekorasi Background -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-600/10 rounded-full blur-[100px] -z-10"></div>

    <div class="grid lg:grid-cols-2 gap-12 items-start">
        
        <!-- BAGIAN KIRI: Form Input -->
        <div>
            <h1 class="text-4xl lg:text-6xl font-extrabold leading-tight italic uppercase tracking-tighter">
                Cek Ongkir <span class="text-cyan-400">Berbagai Ekspedisi</span>
            </h1>
            <p class="text-slate-400 mt-6 text-lg max-w-md">
                Bandingkan tarif pengiriman ke seluruh Indonesia dengan lebih akurat dan transparan bersama LogiCheck.
            </p>

            <div class="mt-10 p-1 bg-gradient-to-br from-slate-800 to-transparent rounded-[2.5rem]">
                <div class="bg-[#050a18]/90 backdrop-blur-xl p-8 rounded-[2.4rem] border border-slate-800 shadow-2xl">
                    <form action="<?= base_url('logicheck/ongkir') ?>" method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest ml-2 italic">Kota Asal</label>
                                <input type="text" name="asal" value="<?= $pencarian['asal'] ?? '' ?>" placeholder="Contoh: Surabaya" required
                                    class="w-full px-6 py-4 bg-[#020617] border border-slate-800 rounded-2xl focus:border-cyan-500 outline-none transition-all text-white placeholder:text-slate-600">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest ml-2 italic">Kota Tujuan</label>
                                <input type="text" name="tujuan" value="<?= $pencarian['tujuan'] ?? '' ?>" placeholder="Contoh: Samarinda" required
                                    class="w-full px-6 py-4 bg-[#020617] border border-slate-800 rounded-2xl focus:border-cyan-500 outline-none transition-all text-white placeholder:text-slate-600">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest ml-2 italic">Berat Paket</label>
                            <div class="flex items-center">
                                <input type="number" name="berat" value="<?= $pencarian['berat'] ?? '' ?>" placeholder="1000" required
                                    class="flex-1 px-6 py-4 bg-[#020617] border border-slate-800 rounded-l-2xl focus:border-cyan-500 outline-none transition-all text-white">
                                <span class="px-6 py-4 bg-slate-900 border border-l-0 border-slate-800 rounded-r-2xl text-slate-400 font-bold text-sm">GRAM</span>
                            </div>
                        </div>

                        <button type="submit" class="w-full py-5 bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-black rounded-2xl shadow-[0_0_20px_rgba(34,211,238,0.3)] transition-all active:scale-[0.98] uppercase italic tracking-tighter">
                            Cari Ongkir Terbaik
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="mt-8 flex items-center gap-4 text-slate-500">
                <a href="<?= base_url('/') ?>" class="text-sm font-bold hover:text-cyan-400 transition-colors">← Kembali ke Beranda</a>
            </div>
        </div>

        <!-- BAGIAN KANAN: Hasil Pencarian (Gambar ke-1) -->
        <div class="lg:mt-0 mt-12">
            <?php if (!empty($hasil_ekspedisi)): ?>
                <h2 class="text-xl font-bold mb-6 italic uppercase tracking-wider text-cyan-400">Hasil Perbandingan Harga</h2>
                
                <div class="space-y-4">
                    <?php foreach ($hasil_ekspedisi as $row): ?>
                    <div class="group bg-slate-900/40 backdrop-blur-md border border-slate-800 rounded-[2rem] p-5 flex flex-wrap items-center justify-between shadow-xl hover:border-cyan-500/50 transition-all duration-300">
                        
                        <!-- Logo & Layanan -->
                        <div class="flex items-center w-full sm:w-1/3 mb-4 sm:mb-0">
                            <div class="relative">
                                <?php if($row['hemat']): ?>
                                    <span class="absolute -top-4 -left-2 bg-red-500 text-white text-[9px] px-3 py-1 rounded-full font-black uppercase tracking-tighter">Hemat</span>
                                <?php endif; ?>
                                <div class="bg-white p-2 rounded-xl w-20 h-12 flex items-center justify-center">
                                    <!-- Pastikan logo ada di folder public/img/ -->
                                    <img src="<?= base_url('img/'.$row['logo']) ?>" alt="Logo" class="max-h-full max-w-full object-contain">
                                </div>
                            </div>
                            <div class="ml-4">
                                <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest">Layanan</p>
                                <p class="font-extrabold text-sm text-white"><?= $row['layanan'] ?></p>
                            </div>
                        </div>

                        <!-- Info Tengah (Estimasi & COD) -->
                        <div class="flex flex-1 justify-around text-center px-2">
                            <div>
                                <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest">Estimasi</p>
                                <p class="text-xs font-semibold text-slate-200"><?= $row['estimasi'] ?></p>
                            </div>
                            <div>
                                <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest">COD</p>
                                <p class="text-xs font-semibold text-slate-200"><?= $row['cod'] ?></p>
                            </div>
                        </div>

                        <!-- Tarif & Tombol -->
                        <div class="w-full sm:w-auto mt-4 sm:mt-0 flex items-center justify-between sm:justify-end gap-6 border-t sm:border-t-0 border-slate-800 pt-4 sm:pt-0">
                            <div class="text-right">
                                <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest">Tarif</p>
                                <p class="text-cyan-400 font-black text-xl italic">Rp<?= number_format($row['tarif'], 0, ',', '.') ?></p>
                                <?php if($row['coret'] > 0): ?>
                                    <p class="text-[10px] text-red-500 line-through">Rp<?= number_format($row['coret'], 0, ',', '.') ?></p>
                                <?php endif; ?>
                            </div>
                            <button class="bg-cyan-500/10 hover:bg-cyan-400 hover:text-slate-950 p-3 rounded-xl border border-cyan-500/30 transition-all group-hover:scale-110">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Tampilan Jika Belum Cari (Placeholder) -->
                <div class="p-12 rounded-[40px] border border-slate-800 bg-slate-900/20 backdrop-blur-sm text-center">
                    <img src="https://cdni.iconscout.com/illustration/premium/thumb/delivery-service-illustration-download-in-svg-png-gif-file-formats--shipping-logistics-courier-and-pack-illustrations-3610113.png" 
                         alt="Logistics LogiCheck" class="w-64 mx-auto opacity-50 grayscale hover:grayscale-0 transition duration-500">
                    <p class="text-slate-500 mt-6 font-bold italic uppercase tracking-widest">Masukkan detail paket untuk membandingkan ongkir</p>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>

</body>
</html>