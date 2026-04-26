<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pengiriman | LogiCheck</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="bg-[#020617] text-white font-['Plus_Jakarta_Sans'] p-6">
    <div class="max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-2xl font-extrabold text-cyan-400">Status Paket</h2>
                <p class="text-slate-400 text-sm">No. Resi: <span class="font-mono font-bold"><?= $hasil['data']['summary']['awb'] ?></span></p>
            </div>
            <div class="bg-cyan-500/10 border border-cyan-500/20 px-4 py-2 rounded-xl text-cyan-400 font-bold text-sm">
                <?= $hasil['data']['summary']['status'] ?>
            </div>
        </div>

        <?php if($hasil['status'] == 200): ?>
            <div class="grid grid-cols-2 gap-4 mb-8 bg-slate-900/50 p-5 rounded-2xl border border-slate-800">
                <div>
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest">Ekspedisi</p>
                    <p class="text-sm font-bold"><?= $hasil['data']['summary']['courier'] ?></p>
                </div>
                <div>
                    <p class="text-[10px] text-slate-500 uppercase font-bold tracking-widest">Tanggal Kirim</p>
                    <p class="text-sm font-bold"><?= $hasil['data']['summary']['date'] ?></p>
                </div>
            </div>

            <h3 class="text-sm font-black uppercase tracking-widest mb-6 ml-1">Riwayat Perjalanan</h3>
            <div class="relative border-l-2 border-slate-800 ml-3 space-y-8">
                <?php foreach($hasil['data']['history'] as $step): ?>
                    <div class="relative pl-8">
                        <div class="absolute -left-[9px] top-1 w-4 h-4 bg-cyan-500 rounded-full border-4 border-[#020617] shadow-[0_0_10px_rgba(6,182,212,0.5)]"></div>
                        
                        <div class="bg-slate-900/30 p-4 rounded-2xl border border-slate-800/50">
                            <p class="text-[11px] text-cyan-500 font-bold mb-1"><?= $step['date'] ?></p>
                            <p class="text-sm text-white font-medium leading-relaxed"><?= $step['desc'] ?></p>
                            <?php if(!empty($step['location'])): ?>
                                <p class="text-[10px] text-slate-500 mt-2 flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    </svg>
                                    <?= $step['location'] ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-20 bg-slate-900/50 rounded-[3rem] border border-dashed border-slate-800">
                <p class="text-slate-400">Data tidak ditemukan. Periksa kembali nomor resi dan kurir Anda.</p>
            </div>
        <?php endif; ?>

        <div class="mt-10 text-center">
            <a href="<?= base_url('/') ?>" class="text-sm font-bold text-slate-500 hover:text-cyan-400 transition-colors"> Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>