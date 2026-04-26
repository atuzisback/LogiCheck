<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Ongkir | LogiCheck</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-dark-custom { background-color: #020617; } /* Warna dasar LogiCheck */
    </style>
</head>
<body class="bg-dark-custom text-white overflow-x-hidden">

<div class="max-w-7xl mx-auto px-6 py-12 lg:py-20 relative">
    <div class="absolute top-0 right-0 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-blue-600/10 rounded-full blur-[100px] -z-10"></div>

    <div class="grid lg:grid-cols-2 gap-12 items-center">
        
        <div>
            <h1 class="text-4xl lg:text-6xl font-extrabold leading-tight italic uppercase tracking-tighter">
                Cek Ongkir <span class="text-cyan-400">Berbagai Ekspedisi</span>
            </h1>
            <p class="text-slate-400 mt-6 text-lg max-w-md">
                Bandingkan tarif pengiriman ke seluruh Indonesia dengan lebih akurat dan transparan bersama LogiCheck.
            </p>

            <div class="mt-10 p-1 bg-gradient-to-br from-slate-800 to-transparent rounded-[2.5rem]">
                <div class="bg-[#050a18]/90 backdrop-blur-xl p-8 rounded-[2.4rem] border border-slate-800 shadow-2xl">
                    <form action="<?= base_url('layanan/cek-ongkir') ?>" method="POST" class="space-y-6">
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest ml-2 italic">Kota Asal</label>
                                <input type="text" name="asal" placeholder="Contoh: Surabaya" required
                                    class="w-full px-6 py-4 bg-[#020617] border border-slate-800 rounded-2xl focus:border-cyan-500 outline-none transition-all text-white placeholder:text-slate-600">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest ml-2 italic">Kota Tujuan</label>
                                <input type="text" name="tujuan" placeholder="Contoh: Samarinda" required
                                    class="w-full px-6 py-4 bg-[#020617] border border-slate-800 rounded-2xl focus:border-cyan-500 outline-none transition-all text-white placeholder:text-slate-600">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-cyan-400 uppercase tracking-widest ml-2 italic">Berat Paket</label>
                            <div class="flex items-center">
                                <input type="number" name="berat" placeholder="1000" required
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

        <div class="hidden lg:block relative">
            <div class="relative z-10 p-12 rounded-[40px] border border-slate-800 bg-slate-900/20 backdrop-blur-sm shadow-inner">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/delivery-service-illustration-download-in-svg-png-gif-file-formats--shipping-logistics-courier-and-pack-illustrations-3610113.png" 
                     alt="Logistics LogiCheck" class="w-full h-auto drop-shadow-[0_20px_50px_rgba(34,211,238,0.2)]">
            </div>

            <div class="absolute -bottom-6 -left-6 bg-[#020617] p-5 rounded-2xl shadow-2xl border border-slate-800 flex items-center gap-4 animate-bounce">
                <div class="w-12 h-12 bg-cyan-500/20 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <p class="text-[10px] text-cyan-500 font-bold uppercase tracking-widest">Real-time Data</p>
                    <p class="text-sm font-black text-white italic uppercase">Ekspedisi Terpercaya</p>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>