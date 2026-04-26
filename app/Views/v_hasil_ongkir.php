<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Ongkir | LogiCheck</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#020617] text-white p-8">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-2xl font-black text-cyan-400 italic mb-2 uppercase">Daftar Tarif Pengiriman</h2>
        <p class="text-slate-400 text-sm mb-8">
            Menampilkan hasil dari <span class="text-white font-bold"><?= $asal ?></span> 
            ke <span class="text-white font-bold"><?= $tujuan ?></span> (<?= $berat ?> gram)
        </p>

        <div class="mb-10 text-center lg:text-left">
            <h3 class="text-cyan-400 text-xs font-black tracking-[0.3em] uppercase italic mb-2">Hasil Pencarian</h3>
            <h2 class="text-3xl font-black italic uppercase tracking-tighter">Opsi <span class="text-cyan-400">Pengiriman Terbaik</span></h2>
        </div>

        <div class="space-y-4">
            <?php if (!empty($hasil)) : ?>
                <?php foreach ($hasil as $kurir) : ?>
                    <div class="group relative overflow-hidden bg-slate-900/40 hover:bg-slate-900/80 border border-slate-800 hover:border-cyan-500/50 rounded-[2rem] p-6 transition-all duration-300">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-6 relative z-10">
                            
                            <div class="flex items-center gap-6 w-full md:w-1/3">
                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center p-2 shadow-lg shadow-cyan-500/10">
                                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/92/J%26T_Express_logo.svg/1200px-J%26T_Express_logo.svg.png" alt="Kurir" class="max-w-full h-auto">
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest italic">Layanan</p>
                                    <p class="text-lg font-black italic text-white uppercase"><?= $kurir['service'] ?></p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 md:flex items-center gap-8 text-center md:text-left w-full md:w-auto">
                                <div>
                                    <p class="text-[10px] font-bold text-slate-500 uppercase">Estimasi</p>
                                    <p class="text-sm font-bold text-slate-200"><?= $kurir['etd'] ?> Hari</p>
                                </div>
                                <div>
                                    <p class="text-[10px] font-bold text-slate-500 uppercase">Status</p>
                                    <p class="text-sm font-bold text-green-400 uppercase">Tersedia</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-6 w-full md:w-auto justify-between md:justify-end">
                                <div class="text-right">
                                    <p class="text-[10px] font-bold text-slate-500 uppercase italic">Tarif</p>
                                    <p class="text-2xl font-black text-cyan-400 italic font-mono tracking-tighter">
                                        Rp <?= number_format($kurir['cost'], 0, ',', '.') ?>
                                    </p>
                                </div>
                                <button class="px-8 py-3 bg-cyan-400 hover:bg-white text-slate-950 font-black rounded-xl transition-all uppercase italic text-xs tracking-widest active:scale-95">
                                    Pilih
                                </button>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/0 via-cyan-500/5 to-cyan-500/0 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="p-10 border border-dashed border-slate-800 rounded-[2rem] text-center">
                    <p class="text-slate-500 italic">Belum ada data hasil ongkir.</p>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="mt-8">
            <a href="<?= base_url('/') ?>" class="text-slate-500 hover:text-cyan-400 text-sm font-bold transition-all">← Kembali Cari Ongkir</a>
        </div>
    </div>
</body>
</html>