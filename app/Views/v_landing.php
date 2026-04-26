<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogiCheck - Satu Solusi Untuk Semua Pengiriman</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .electric-glow { box-shadow: 0 0 15px rgba(0, 225, 255, 0.3); }
        .bg-dark-custom { background-color: #020617; }
        <style>
  :root {
    --background: #0f172a;
    --foreground: #ffffff;
    --card: #1e293b;
    --muted: #64748b;
    --muted-foreground: #94a3b8;
    --border: #334155;
    --cyan: #22d3ee;
  }

  /* Mengarahkan Tailwind untuk menggunakan variabel ini */
  .bg-background { background-color: var(--background); }
  .text-muted-foreground { color: var(--muted-foreground); }
  .border-border { border-color: var(--border); }
  .bg-card { background-color: var(--card); }
    </style>
</head>
<body class="bg-slate-950 text-white selection:bg-cyan-500 selection:text-white">

    <header class="fixed top-0 left-0 right-0 z-50 bg-[#0f172a]/80 backdrop-blur-xl border-b border-slate-800/50">
    <nav class="max-w-7xl mx-auto px-6 lg:px-8 flex items-center justify-between py-4">
        <!-- Logo Kiri -->
        <div class="flex items-center flex-shrink-0">
            <a href="<?= base_url() ?>" class="flex items-center gap-2 group">
                <div class="relative">
                    <div class="absolute inset-0 bg-[#00e1ff] blur-lg opacity-50 group-hover:opacity-75 transition-opacity"></div>
                    <svg class="relative h-8 w-8 text-[#00e1ff]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 2L4 8v16l12 6 12-6V8L16 2z" stroke="currentColor" stroke-width="2" fill="none" />
                        <path d="M16 8l-6 3v6l6 3 6-3v-6l-6-3z" fill="currentColor" />
                        <path d="M4 8l12 6 12-6" stroke="currentColor" stroke-width="2" />
                        <path d="M16 14v14" stroke="currentColor" stroke-width="2" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-tight">
                    <span class="text-[#00e1ff]">Logi</span><span class="text-white">Check</span>
                </span>
            </a>
        </div>

        <!-- Menu Tengah -->
        <div class="hidden lg:flex items-center justify-center flex-1 gap-x-8">
            <div class="relative group">
    <button class="flex items-center gap-1 hover:text-cyan-400 transition-colors py-4 uppercase font-bold text-sm tracking-widest">
        Layanan
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div class="absolute left-0 top-full w-[750px] bg-slate-900/95 backdrop-blur-2xl border border-slate-800 rounded-[2.5rem] p-8 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
        <div class="grid grid-cols-3 gap-8">
            
            <div class="space-y-5">
                <h3 class="text-[10px] font-black text-cyan-500 uppercase tracking-[0.2em] mb-3 ml-1">Pengiriman Paket</h3>
                
                <a href="#" class="flex items-start gap-3 p-2 rounded-xl hover:bg-white/5 transition-all group/item">
                    <div class="mt-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" /></svg></div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400">Reguler</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed">Kirim ke seluruh Indonesia dengan pilihan ekspedisi lengkap.</p>
                    </div>
                </a>

                <a href="#" class="flex items-start gap-3 p-2 rounded-xl hover:bg-white/5 transition-all group/item">
                    <div class="mt-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400">Instant / Sameday</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed">Sampai dalam hitungan jam untuk pengiriman dalam kota.</p>
                    </div>
                </a>
            </div>

            <div class="space-y-5">
                <h3 class="text-[10px] font-black text-cyan-500 uppercase tracking-[0.2em] mb-3 ml-1">Sistem Pintar</h3>
                
                <a href="#" class="flex items-start gap-3 p-2 rounded-xl hover:bg-white/5 transition-all group/item">
                    <div class="mt-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg></div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400">Multi-Cek Ongkir</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed">Bandingkan harga dari 20+ ekspedisi dalam satu kali klik.</p>
                    </div>
                </a>

                <a href="#" class="flex items-start gap-3 p-2 rounded-xl hover:bg-white/5 transition-all group/item">
                    <div class="mt-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" /></svg></div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400">Manajemen Resi</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed">Simpan dan lacak semua nomor resi secara otomatis.</p>
                    </div>
                </a>
            </div>

            <div class="bg-slate-950/50 rounded-3xl p-5 border border-slate-800/50">
                <h3 class="text-[10px] font-black text-white uppercase tracking-[0.2em] mb-4">Keunggulan</h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-2 text-[11px] text-slate-400 italic">
                        <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Laporan Lengkap UMKM
                    </li>
                    <li class="flex items-center gap-2 text-[11px] text-slate-400 italic">
                        <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Notifikasi Real-time
                    </li>
                    <li class="flex items-center gap-2 text-[11px] text-slate-400 italic">
                        <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Hemat Biaya Operasional
                    </li>
                    <li class="flex items-center gap-2 text-[11px] text-slate-400 italic">
                        <span class="w-1.5 h-1.5 bg-cyan-500 rounded-full"></span> Pick-up Otomatis
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
            <div class="relative group">
    <button class="flex items-center gap-1 hover:text-cyan-400 transition-colors py-4 uppercase font-bold text-sm tracking-widest">
        Solusi
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div class="absolute left-0 top-full w-[500px] bg-slate-900/95 backdrop-blur-2xl border border-slate-800 rounded-[2rem] p-6 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
        <div class="grid grid-cols-2 gap-6">
            
            <div class="space-y-4">
                <h3 class="text-[10px] font-black text-cyan-500 uppercase tracking-[0.2em] mb-2 ml-1">Untuk Bisnis Anda</h3>
                
                <a href="#" class="flex items-start gap-3 p-3 rounded-2xl hover:bg-white/5 transition-all group/item">
                    <div class="w-10 h-10 bg-cyan-500/10 rounded-xl flex items-center justify-center shrink-0 border border-cyan-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400 transition-colors">Dashboard LogiCheck</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed mt-1">Pantau semua kiriman UMKM Anda dalam satu dashboard terpadu.</p>
                    </div>
                </a>

                <a href="#" class="flex items-start gap-3 p-3 rounded-2xl hover:bg-white/5 transition-all group/item">
                    <div class="w-10 h-10 bg-cyan-500/10 rounded-xl flex items-center justify-center shrink-0 border border-cyan-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400 transition-colors">Aplikasi Mobile</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed mt-1">Cek ongkir dan buat resi kapan saja langsung dari smartphone.</p>
                    </div>
                </a>
            </div>

            <div class="space-y-4">
                <h3 class="text-[10px] font-black text-cyan-500 uppercase tracking-[0.2em] mb-2 ml-1">Layanan Pintar</h3>

                <a href="#" class="flex items-start gap-3 p-3 rounded-2xl hover:bg-white/5 transition-all group/item">
                    <div class="w-10 h-10 bg-cyan-500/10 rounded-xl flex items-center justify-center shrink-0 border border-cyan-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400 transition-colors">Smart Aggregator</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed mt-1">Rekomendasi ekspedisi tercepat dan termurah secara otomatis.</p>
                    </div>
                </a>

                <a href="#" class="flex items-start gap-3 p-3 rounded-2xl hover:bg-white/5 transition-all group/item">
                    <div class="w-10 h-10 bg-cyan-500/10 rounded-xl flex items-center justify-center shrink-0 border border-cyan-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400 transition-colors">Notifikasi WA Otomatis</h4>
                        <p class="text-[10px] text-slate-500 leading-relaxed mt-1">Kirim status paket ke pelanggan via WhatsApp secara real-time.</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<div id="section-tracking" class="mt-10"> 
    </div>
            <a href="<?= base_url('cek-ongkir') ?>" class="text-slate-600 hover:text-purple-600 font-medium transition-all">
            Cek Ongkir
            </a>
            <a href="#section-tracking" class="hover:text-cyan-400">CEK RESI</a>
           <div class="relative group">
    <button class="flex items-center gap-1 hover:text-cyan-400 transition-colors py-4">
        PROGRAM
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:rotate-180 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <div class="absolute left-0 top-full w-80 bg-slate-900/90 backdrop-blur-xl border border-slate-800 rounded-2xl p-4 shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
        
        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-white/5 transition-colors group/item">
            <div class="w-10 h-10 bg-cyan-500/10 border border-cyan-500/20 rounded-lg flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(6,182,212,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <div>
                <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400 transition-colors">Event</h4>
                <p class="text-[11px] text-slate-400 leading-relaxed mt-1">Gabung & ikuti keseruan event LogiCheck. Dapatkan insight dan relasi untuk #NaikKelas.</p>
            </div>
        </a>

        <a href="#" class="flex items-start gap-4 p-3 rounded-xl hover:bg-white/5 transition-colors mt-1 group/item">
            <div class="w-10 h-10 bg-cyan-500/10 border border-cyan-500/20 rounded-lg flex items-center justify-center shrink-0 shadow-[0_0_15px_rgba(6,182,212,0.1)]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                </svg>
            </div>
            <div>
                <h4 class="text-sm font-bold text-white group-hover/item:text-cyan-400 transition-colors">Promo</h4>
                <p class="text-[11px] text-slate-400 leading-relaxed mt-1">Jangan lewatkan promo menarik! Hemat ongkir, kirim makin untung!</p>
            </div>
        </a>

    </div>
</div>
        </div>

        <!-- Menu Kanan -->
        <div class="hidden lg:flex items-center gap-8 flex-shrink-0">
            
            <a href="/login" class="text-slate-300 font-medium px-4 py-2 transition-colors hover:text-cyan-400">
                Masuk
            </a>
            <a href="/register" class="border border-cyan-400 text-white font-bold text-base px-6 py-2 rounded-full transition-all hover:bg-cyan-400 hover:text-slate-950 hover:shadow-lg duration-200">
                Daftar Gratis
            </a>
        </div>
   

        <div class="flex lg:hidden">
            <button class="text-white hover:text-[#00e1ff] transition-colors p-2">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>
</header>
<div class="h-20"></div>

<section class="relative min-h-[85vh] flex flex-col items-center justify-center bg-[#020617] px-6 overflow-hidden">
    
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-purple-600/10 rounded-full blur-[120px]"></div>
    </div>

    <div class="relative z-10 w-full max-w-5xl mx-auto text-center">
        
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-cyan-500/20 bg-cyan-500/5 backdrop-blur-md mb-8">
            <div class="h-1.5 w-1.5 rounded-full bg-cyan-400 animate-pulse"></div>
            <span class="text-[10px] font-bold tracking-[0.3em] text-cyan-400/80 uppercase">
                Platform Logistik Cerdas
            </span>
        </div>

        <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white tracking-tight leading-[1.05] mb-6">
            Satu Dashboard, <br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500">
                Segala Pengiriman.
            </span>
        </h1>

        <p class="max-w-2xl mx-auto text-slate-400 text-base md:text-lg leading-relaxed mb-12 px-4">
            Bandingkan ongkir dari 50+ ekspedisi secara instan. Solusi pengiriman 
            UMKM yang dirancang untuk lebih hemat, cepat, dan transparan.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="#cek-ongkir" class="group relative w-full sm:w-auto px-8 py-4 bg-cyan-500 rounded-full transition-all hover:scale-105 active:scale-95 shadow-[0_0_30px_rgba(6,182,212,0.3)] inline-flex items-center justify-center gap-2">
                <span class="text-sm font-black text-slate-950">MULAI CEK ONGKIR</span>
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>

            <a href="#solusi" class="w-full sm:w-auto px-8 py-4 rounded-full border border-slate-800 text-sm font-bold text-white hover:bg-white/5 transition-all inline-flex items-center justify-center">
                PELAJARI SOLUSI
            </a>
        </div>

        <div class="mt-20 flex justify-center items-center gap-6 opacity-30">
           <span class="text-[10px] font-bold tracking-widest text-slate-500 uppercase italic">#BisnisMaju</span>
           <div class="h-1 w-1 bg-slate-700 rounded-full"></div>
           <span class="text-[10px] font-bold tracking-widest text-slate-500 uppercase italic">#HematBiaya</span>
        </div>

    </div>
</section>


<section id="cek-ongkir" class="relative py-20 px-4 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(0, 225, 255, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 225, 255, 0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Cek <span class="text-[#00e1ff]">Ongkir</span> & <span class="text-[#00e1ff]">Lacak</span> Paket
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto">
                Bandingkan harga pengiriman dari berbagai ekspedisi dan lacak paket Anda secara real-time
            </p>
        </div>

        <div class="flex justify-center mb-8">
            <div class="inline-flex p-1.5 rounded-full bg-slate-800/50 backdrop-blur-sm border border-slate-700">
                <button onclick="switchTab('ongkir')" id="btn-ongkir" class="tab-btn relative px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 text-white">
                    <span id="bg-active-ongkir" class="absolute inset-0 bg-[#00e1ff] rounded-full shadow-[0_0_20px_rgba(0,225,255,0.5)]"></span>
                    <span class="relative flex items-center gap-2">📦 Cek Ongkir</span>
                </button>
                <button onclick="switchTab('tracking')" id="btn-tracking" class="tab-btn relative px-6 py-3 rounded-full text-sm font-semibold transition-all duration-300 text-slate-400">
                    <span id="bg-active-tracking" class="absolute inset-0 bg-[#00e1ff] rounded-full shadow-[0_0_20px_rgba(0,225,255,0.5)] hidden"></span>
                    <span class="relative flex items-center gap-2">🔍 Tracking Resi</span>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
            
            <div class="lg:col-span-3 order-2 lg:order-1">
                <div class="relative h-full bg-slate-900/50 backdrop-blur-xl rounded-2xl border border-cyan-500/20 p-5 group hover:border-cyan-500/40 transition-all">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="p-2 rounded-lg bg-cyan-500/10">🔔</div>
                        <h3 class="font-semibold text-white">Notifikasi Terbaru</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="p-3 rounded-xl bg-slate-800/50 border border-slate-700">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-[#00e1ff] font-bold">J&T Cargo</span>
                                <span class="text-cyan-400 animate-pulse">Baru Saja</span>
                            </div>
                            <p class="text-[10px] text-slate-400">JKT → SUB (Rp36.400)</p>
                        </div>
                        <div class="p-3 rounded-xl bg-slate-800/50 border border-slate-700">
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-[#00e1ff] font-bold">JNE Express</span>
                                <span class="text-slate-500">2 mnt lalu</span>
                            </div>
                            <p class="text-[10px] text-slate-400">BDG → MED (Rp52.000)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6 order-1 lg:order-2">
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500 to-fuchsia-500 rounded-2xl blur opacity-20 group-hover:opacity-40 transition"></div>
                    <div class="relative bg-slate-900/80 backdrop-blur-xl rounded-2xl border border-slate-700 p-8">
                        
                        <div id="form-ongkir">
                            <h3 class="text-xl font-bold text-white mb-6 text-center">Cek Ongkir Semua Ekspedisi</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-xs font-medium text-slate-400 mb-2">Kota Asal</label>
                                    <input type="text" placeholder="Masukkan kota asal..." class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-400 mb-2">Kota Tujuan</label>
                                    <input type="text" placeholder="Masukkan kota tujuan..." class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                                </div>
                                <button class="w-full py-4 bg-[#00e1ff] text-[#0f172a] font-bold rounded-xl shadow-[0_0_20px_rgba(0,225,255,0.4)] hover:scale-[1.02] transition-transform">
                                    CARI ONGKIR TERBAIK
                                </button>
                            </div>
                        </div>

                        <div id="form-tracking" class="hidden">
                            <h3 class="text-xl font-bold text-white mb-6 text-center">Lacak Status Pengiriman</h3>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-xs font-medium text-slate-400 mb-2">Nomor Resi</label>
                                    <input type="text" placeholder="Masukkan nomor resi..." class="w-full px-4 py-3 bg-slate-800 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-500">
                                </div>
                                <button class="w-full py-4 bg-[#00e1ff] text-[#0f172a] font-bold rounded-xl shadow-[0_0_20px_rgba(0,225,255,0.4)] hover:scale-[1.02] transition-transform">
                                    LACAK PAKET
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 order-3">
                <div class="bg-slate-900/50 backdrop-blur-xl rounded-2xl border border-slate-700 p-6 text-center">
                    <div class="mb-4">
                        <span class="text-yellow-400 text-xl">★★★★★</span>
                        <p class="text-2xl font-bold text-white">4.8<span class="text-sm text-slate-500">/5</span></p>
                        <p class="text-[10px] text-slate-400">12,500+ Reviews</p>
                    </div>
                    <div class="pt-4 border-t border-slate-800">
                        <p class="text-2xl font-bold text-[#00e1ff]">+500K</p>
                        <p class="text-[10px] text-slate-400 uppercase tracking-widest">Member Aktif</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
function switchTab(type) {
    const formOngkir = document.getElementById('form-ongkir');
    const formTracking = document.getElementById('form-tracking');
    const bgOngkir = document.getElementById('bg-active-ongkir');
    const bgTracking = document.getElementById('bg-active-tracking');
    const btnOngkir = document.getElementById('btn-ongkir');
    const btnTracking = document.getElementById('btn-tracking');

    if(type === 'ongkir') {
        formOngkir.classList.remove('hidden');
        formTracking.classList.add('hidden');
        bgOngkir.classList.remove('hidden');
        bgTracking.classList.add('hidden');
        btnOngkir.classList.add('text-white');
        btnOngkir.classList.remove('text-slate-400');
        btnTracking.classList.add('text-slate-400');
    } else {
        formOngkir.classList.add('hidden');
        formTracking.classList.remove('hidden');
        bgOngkir.classList.add('hidden');
        bgTracking.classList.remove('hidden');
        btnTracking.classList.add('text-white');
        btnTracking.classList.remove('text-slate-400');
        btnOngkir.classList.add('text-slate-400');
    }
}
</script>

<section id="why-choose-us" class="relative py-20 px-4 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-[radial-gradient(circle,rgba(0,225,255,0.03)_0%,transparent_70%)]"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
                Kenapa Harus Kirim Paket Lewat 
                <span class="text-[#00e1ff] drop-shadow-[0_0_20px_rgba(0,225,255,0.5)]">
                    LogiCheck
                </span>?
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Platform pengiriman terlengkap dengan fitur-fitur unggulan untuk bisnis Anda
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <div class="group relative p-6 rounded-2xl bg-white/[0.02] backdrop-blur-xl border border-white/10 transition-all duration-300 hover:-translate-y-2 hover:border-[#00e1ff]/60 hover:shadow-[0_0_30px_rgba(0,225,255,0.15)]">
                <div class="relative mb-5">
                    <div class="absolute inset-0 w-12 h-12 bg-[#00e1ff]/20 rounded-xl blur-xl group-hover:bg-[#00e1ff]/30 transition-all"></div>
                    <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-[#00e1ff]/20 to-[#00e1ff]/5 border border-[#00e1ff]/30 flex items-center justify-center group-hover:border-[#00e1ff]/60 transition-all">
                        <span class="text-[#00e1ff] text-xl">⚡</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-[#00e1ff] transition-colors">Efisien & Cepat</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Perbandingan harga kurir otomatis dalam hitungan detik. Hemat waktu, hemat tenaga.</p>
                <div class="absolute top-3 right-3 w-1.5 h-1.5 rounded-full bg-[#00e1ff] opacity-0 group-hover:opacity-100 shadow-[0_0_10px_rgba(0,225,255,0.8)] transition-opacity"></div>
            </div>

            <div class="group relative p-6 rounded-2xl bg-white/[0.02] backdrop-blur-xl border border-white/10 transition-all duration-300 hover:-translate-y-2 hover:border-[#00e1ff]/60 hover:shadow-[0_0_30px_rgba(0,225,255,0.15)]">
                <div class="relative mb-5">
                    <div class="absolute inset-0 w-12 h-12 bg-[#00e1ff]/20 rounded-xl blur-xl group-hover:bg-[#00e1ff]/30 transition-all"></div>
                    <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-[#00e1ff]/20 to-[#00e1ff]/5 border border-[#00e1ff]/30 flex items-center justify-center group-hover:border-[#00e1ff]/60 transition-all">
                        <span class="text-[#00e1ff] text-xl">📦</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-[#00e1ff] transition-colors">Tanpa Minimum Order</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Kirim satu paket pun tetap dapat harga agregator yang murah. Cocok untuk semua skala bisnis.</p>
                <div class="absolute top-3 right-3 w-1.5 h-1.5 rounded-full bg-[#00e1ff] opacity-0 group-hover:opacity-100 shadow-[0_0_10px_rgba(0,225,255,0.8)] transition-opacity"></div>
            </div>

            <div class="group relative p-6 rounded-2xl bg-white/[0.02] backdrop-blur-xl border border-white/10 transition-all duration-300 hover:-translate-y-2 hover:border-[#00e1ff]/60 hover:shadow-[0_0_30px_rgba(0,225,255,0.15)]">
                <div class="relative mb-5">
                    <div class="absolute inset-0 w-12 h-12 bg-[#00e1ff]/20 rounded-xl blur-xl group-hover:bg-[#00e1ff]/30 transition-all"></div>
                    <div class="relative w-12 h-12 rounded-xl bg-gradient-to-br from-[#00e1ff]/20 to-[#00e1ff]/5 border border-[#00e1ff]/30 flex items-center justify-center group-hover:border-[#00e1ff]/60 transition-all">
                        <span class="text-[#00e1ff] text-xl">📊</span>
                    </div>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-[#00e1ff] transition-colors">Smart Analytics</h3>
                <p class="text-slate-400 leading-relaxed text-sm">Laporan pengiriman bulanan untuk bantu evaluasi bisnis UMKM. Data-driven decisions.</p>
                <div class="absolute top-3 right-3 w-1.5 h-1.5 rounded-full bg-[#00e1ff] opacity-0 group-hover:opacity-100 shadow-[0_0_10px_rgba(0,225,255,0.8)] transition-opacity"></div>
            </div>

            </div>

        <div class="mt-16 text-center">
            <p class="text-slate-500 mb-6">Siap untuk meningkatkan efisiensi pengiriman bisnis Anda?</p>
            <button class="group relative px-8 py-4 rounded-full bg-gradient-to-r from-[#00e1ff] to-[#0099ff] text-[#0f172a] font-bold text-lg transition-all duration-300 hover:shadow-[0_0_30px_rgba(0,225,255,0.5)] hover:scale-105">
                <span class="flex items-center gap-2">
                    Mulai Gratis Sekarang 
                    <span class="group-hover:translate-x-1 transition-transform">→</span>
                </span>
            </button>
        </div>
    </div>
</section>

<section id="partners" class="relative py-20 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-500/5 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/30 mb-6">
                <span class="text-cyan-400 text-xs">⚡</span>
                <span class="text-cyan-400 text-sm font-medium">Mitra Terpercaya</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
                Pilihan Ekspedisi Terlengkap 
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                    untuk Bisnis Anda
                </span>
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Terintegrasi dengan lebih dari 10 jasa ekspedisi terkemuka di Indonesia untuk kebutuhan pengiriman UMKM.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6 max-w-5xl mx-auto mb-12">
            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/50 via-cyan-400/20 to-blue-500/50 rounded-xl opacity-0 group-hover:opacity-100 blur-sm transition duration-300"></div>
                <div class="relative bg-[#1e293b] rounded-xl p-6 border border-white/5 group-hover:border-cyan-400/50 transition duration-300 flex items-center justify-center h-20 shadow-xl">
                    <span class="font-bold text-xl tracking-tight text-[#D4262C]">JNE</span>
                </div>
            </div>

            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/50 via-cyan-400/20 to-blue-500/50 rounded-xl opacity-0 group-hover:opacity-100 blur-sm transition duration-300"></div>
                <div class="relative bg-[#1e293b] rounded-xl p-6 border border-white/5 group-hover:border-cyan-400/50 transition duration-300 flex items-center justify-center h-20 shadow-xl">
                    <span class="font-bold text-xl tracking-tight text-[#D4262C]">J&T Express</span>
                </div>
            </div>

            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/50 via-cyan-400/20 to-blue-500/50 rounded-xl opacity-0 group-hover:opacity-100 blur-sm transition duration-300"></div>
                <div class="relative bg-[#1e293b] rounded-xl p-6 border border-white/5 group-hover:border-cyan-400/50 transition duration-300 flex items-center justify-center h-20 shadow-xl">
                    <span class="font-bold text-xl tracking-tight text-[#B8860B]">SiCepat</span>
                </div>
            </div>

            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/50 via-cyan-400/20 to-blue-500/50 rounded-xl opacity-0 group-hover:opacity-100 blur-sm transition duration-300"></div>
                <div class="relative bg-[#1e293b] rounded-xl p-6 border border-white/5 group-hover:border-cyan-400/50 transition duration-300 flex items-center justify-center h-20 shadow-xl">
                    <span class="font-bold text-xl tracking-tight text-[#D4262C]">Ninja Xpress</span>
                </div>
            </div>

            <div class="group relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-500/50 via-cyan-400/20 to-blue-500/50 rounded-xl opacity-0 group-hover:opacity-100 blur-sm transition duration-300"></div>
                <div class="relative bg-[#1e293b] rounded-xl p-6 border border-white/5 group-hover:border-cyan-400/50 transition duration-300 flex items-center justify-center h-20 shadow-xl">
                    <span class="font-bold text-xl tracking-tight text-[#00A651]">AnterAja</span>
                </div>
            </div>
        </div>

        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
            <div class="text-center p-4 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400/30 transition-colors">
                <div class="text-2xl md:text-3xl font-bold text-cyan-400 mb-1">10+</div>
                <div class="text-xs text-slate-400 uppercase tracking-widest">Mitra Ekspedisi</div>
            </div>
            <div class="text-center p-4 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400/30 transition-colors">
                <div class="text-2xl md:text-3xl font-bold text-cyan-400 mb-1">99.9%</div>
                <div class="text-xs text-slate-400 uppercase tracking-widest">Uptime System</div>
            </div>
            <div class="text-center p-4 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400/30 transition-colors">
                <div class="text-2xl md:text-3xl font-bold text-cyan-400 mb-1">&lt;1s</div>
                <div class="text-xs text-slate-400 uppercase tracking-widest">Response Time</div>
            </div>
            <div class="text-center p-4 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400/30 transition-colors">
                <div class="text-2xl md:text-3xl font-bold text-cyan-400 mb-1">24/7</div>
                <div class="text-xs text-slate-400 uppercase tracking-widest">Support Live</div>
            </div>
        </div>
    </div>
</section>

<section id="how-it-works" class="relative py-20 md:py-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute top-1/2 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-500/5 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 md:px-6">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <div class="relative order-2 lg:order-1">
                <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/20 via-cyan-400/10 to-transparent rounded-3xl blur-3xl scale-110"></div>
                
                <div class="relative bg-slate-800/80 backdrop-blur-xl border border-cyan-500/30 rounded-2xl p-6 shadow-2xl shadow-cyan-500/10">
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-cyan-400 to-blue-500 flex items-center justify-center">
                                <span class="text-white text-lg">📦</span>
                            </div>
                            <div>
                                <h4 class="text-white font-semibold leading-tight">Pesanan COD</h4>
                                <p class="text-[10px] text-slate-400">Order #LC-2026-0426</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-cyan-500/20 text-cyan-400 text-[10px] font-medium border border-cyan-500/30">
                            Draft
                        </span>
                    </div>

                    <div class="space-y-4">
                        <div class="relative">
                            <label class="text-[10px] text-slate-400 mb-1.5 block">Alamat Pengirim</label>
                            <div class="flex items-center gap-3 bg-slate-900/60 border border-white/5 rounded-xl px-4 py-3">
                                <span class="text-cyan-400 text-xs">📍</span>
                                <span class="text-xs text-white">Surabaya, Jawa Timur</span>
                            </div>
                        </div>

                        <div class="relative">
                            <label class="text-[10px] text-slate-400 mb-1.5 block">Pilih Kurir</label>
                            <div class="flex items-center justify-between bg-slate-900/60 border border-cyan-500/30 rounded-xl px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-red-600 flex items-center justify-center text-white text-[10px] font-bold">JNE</div>
                                    <div class="flex flex-col">
                                        <span class="text-[11px] text-white font-medium">JNE REG</span>
                                        <span class="text-[9px] text-slate-400">2-3 Hari</span>
                                    </div>
                                </div>
                                <span class="text-cyan-400 font-semibold text-xs text-right">Rp 18.000</span>
                            </div>
                        </div>

                        <div class="relative">
                            <label class="text-[10px] text-slate-400 mb-1.5 block">Nilai COD</label>
                            <div class="flex items-center gap-3 bg-slate-900/60 border border-cyan-500/30 rounded-xl px-4 py-3">
                                <span class="text-cyan-400 font-medium text-xs">Rp</span>
                                <span class="text-base text-white font-semibold">250.000</span>
                            </div>
                        </div>

                        <div class="relative group mt-2 cursor-default">
                            <div class="absolute -inset-0.5 bg-gradient-to-r from-cyan-400 to-blue-500 rounded-xl blur opacity-60"></div>
                            <div class="relative flex items-center justify-center gap-2 bg-gradient-to-r from-cyan-400 to-blue-500 text-white text-sm font-semibold py-3 rounded-xl">
                                Pesan Pengiriman
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute -top-4 -right-4 bg-slate-800/90 backdrop-blur-xl border border-cyan-500/30 rounded-xl px-4 py-3 shadow-lg">
                    <div class="flex items-center gap-2">
                        <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                        <span class="text-[10px] text-white font-medium">Sistem Live</span>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="mb-8">
                    <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-medium mb-4 uppercase tracking-widest">
                        Cara Kerja
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                        Lebih Cepat dari <br>
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-400 bg-clip-text text-transparent">
                            Ekspeditur Biasa
                        </span>
                    </h2>
                    <p class="text-slate-400 text-lg">
                        Dana COD langsung masuk saldo LogiCheck secara real-time. Proses simpel, transparan, dan aman untuk UMKM.
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute left-6 top-8 bottom-8 w-0.5 bg-gradient-to-b from-cyan-400 via-cyan-400/50 to-transparent"></div>

                    <div class="space-y-6">
                        <div class="relative flex gap-5 group">
                            <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-slate-900 border border-cyan-400/50 flex items-center justify-center text-white font-bold text-lg shadow-[0_0_15px_rgba(34,211,238,0.3)]">
                                1
                            </div>
                            <div class="flex-1 bg-white/5 backdrop-blur-sm border border-white/5 rounded-xl p-5 hover:bg-white/10 transition duration-300">
                                <h3 class="text-white font-semibold text-lg mb-1">Input Data & Pilih Kurir</h3>
                                <p class="text-slate-400 text-sm">Buat paket pengiriman lewat dashboard. Bandingkan harga tercepat dan pilih favoritmu.</p>
                            </div>
                        </div>

                        <div class="relative flex gap-5 group">
                            <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-slate-900 border border-cyan-400/50 flex items-center justify-center text-white font-bold text-lg shadow-[0_0_15px_rgba(34,211,238,0.3)]">
                                2
                            </div>
                            <div class="flex-1 bg-white/5 backdrop-blur-sm border border-white/5 rounded-xl p-5 hover:bg-white/10 transition duration-300">
                                <h3 class="text-white font-semibold text-lg mb-1">Penjemputan Paket</h3>
                                <p class="text-slate-400 text-sm">Kurir ekspedisi akan jemput paket ke rumahmu (Request Pickup). Pantau statusnya di dashboard.</p>
                            </div>
                        </div>

                        <div class="relative flex gap-5 group">
                            <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-slate-900 border border-cyan-400/50 flex items-center justify-center text-white font-bold text-lg shadow-[0_0_15px_rgba(34,211,238,0.3)]">
                                3
                            </div>
                            <div class="flex-1 bg-white/5 backdrop-blur-sm border border-white/5 rounded-xl p-5 hover:bg-white/10 transition duration-300">
                                <h3 class="text-white font-semibold text-lg mb-1">Saldo Cair Instan</h3>
                                <p class="text-slate-400 text-sm">Begitu paket diterima pembeli, saldo langsung masuk ke akun LogiCheck dan bisa ditarik kapan saja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="finance" class="relative py-20 md:py-28 bg-[#0f172a] overflow-hidden">
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-cyan-500/3 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="flex justify-center mb-6">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/30">
                <span class="text-cyan-400 text-sm">✨</span>
                <span class="text-sm font-medium text-cyan-400 tracking-wide uppercase">Keuangan Aman</span>
            </div>
        </div>

        <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-white mb-6">
            Pencairan Dana COD 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">
                Instan
            </span>
            , Tanpa Drama
        </h2>

        <p class="text-center text-slate-400 text-lg max-w-2xl mx-auto mb-12">
            Paket sampai di tujuan, dana COD langsung cair ke saldo LogiCheck Anda di hari yang sama. 
            Bisnis tetap lancar dengan perputaran kas yang sehat.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="group relative p-[1px] rounded-2xl bg-gradient-to-br from-cyan-500/50 via-blue-500/20 to-transparent hover:from-cyan-400 transition duration-300">
                <div class="relative h-full p-6 rounded-2xl bg-slate-900/80 backdrop-blur-sm transition duration-300">
                    <div class="relative mb-5">
                        <div class="w-14 h-14 rounded-xl bg-cyan-500/10 flex items-center justify-center border border-cyan-500/20 group-hover:border-cyan-400/50 transition duration-300">
                            <span class="text-cyan-400 text-2xl">⚡</span>
                        </div>
                        <div class="absolute inset-0 w-14 h-14 rounded-xl bg-cyan-500/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div class="inline-flex mb-3">
                        <span class="px-2 py-1 text-[10px] font-semibold rounded-md bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">Otomatis</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">Pencairan Reguler</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Dana cair otomatis setelah paket diterima pembeli tanpa biaya tambahan.</p>
                </div>
            </div>

            <div class="group relative p-[1px] rounded-2xl bg-gradient-to-br from-cyan-500/50 via-blue-500/20 to-transparent hover:from-cyan-400 transition duration-300">
                <div class="relative h-full p-6 rounded-2xl bg-slate-900/80 backdrop-blur-sm transition duration-300">
                    <div class="relative mb-5">
                        <div class="w-14 h-14 rounded-xl bg-cyan-500/10 flex items-center justify-center border border-cyan-500/20 group-hover:border-cyan-400/50 transition duration-300">
                            <span class="text-cyan-400 text-2xl">📈</span>
                        </div>
                        <div class="absolute inset-0 w-14 h-14 rounded-xl bg-cyan-500/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div class="inline-flex mb-3">
                        <span class="px-2 py-1 text-[10px] font-semibold rounded-md bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">Talangan</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">LogiCheck Advance</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Solusi talangan dana untuk bisnis yang butuh cash flow cepat sebelum paket tiba.</p>
                </div>
            </div>

            <div class="group relative p-[1px] rounded-2xl bg-gradient-to-br from-cyan-500/50 via-blue-500/20 to-transparent hover:from-cyan-400 transition duration-300">
                <div class="relative h-full p-6 rounded-2xl bg-slate-900/80 backdrop-blur-sm transition duration-300">
                    <div class="relative mb-5">
                        <div class="w-14 h-14 rounded-xl bg-cyan-500/10 flex items-center justify-center border border-cyan-500/20 group-hover:border-cyan-400/50 transition duration-300">
                            <span class="text-cyan-400 text-2xl">💳</span>
                        </div>
                        <div class="absolute inset-0 w-14 h-14 rounded-xl bg-cyan-500/20 blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </div>
                    <div class="inline-flex mb-3">
                        <span class="px-2 py-1 text-[10px] font-semibold rounded-md bg-cyan-500/10 text-cyan-400 border border-cyan-500/20">Instan</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">Tarik ke Semua Bank</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Penarikan saldo instan ke 150+ rekening bank manapun di seluruh Indonesia.</p>
                </div>
            </div>
        </div>

        <div class="mt-16 flex flex-wrap justify-center items-center gap-8 md:gap-16 border-t border-white/5 pt-12">
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-cyan-400 mb-1">&lt; 24 Jam</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest">Pencairan Dana</div>
            </div>
            <div class="hidden md:block w-px h-12 bg-white/10"></div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-white mb-1">0%</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest">Biaya Admin Transfer</div>
            </div>
            <div class="hidden md:block w-px h-12 bg-white/10"></div>
            <div class="text-center">
                <div class="text-3xl md:text-4xl font-bold text-cyan-400 mb-1">150+</div>
                <div class="text-xs text-slate-500 uppercase tracking-widest">Bank & E-Wallet</div>
            </div>
        </div>

        <div class="mt-12 flex justify-center">
            <button class="group relative px-10 py-4 rounded-full font-bold text-[#0f172a] bg-gradient-to-r from-cyan-400 to-blue-500 hover:shadow-[0_0_30px_rgba(34,211,238,0.5)] transition duration-300 transform hover:scale-105">
                <span class="flex items-center gap-2">
                    Aktifkan COD Sekarang
                    <span>⚡</span>
                </span>
            </button>
        </div>
    </div>
</section>

<section id="faq" class="relative py-20 md:py-28 overflow-hidden bg-[#0f172a]">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#0a1628] to-transparent"></div>
    <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-cyan-500/5 rounded-full blur-3xl"></div>

    <div class="container relative mx-auto px-4 max-w-4xl">
        <div class="text-center mb-12 md:mb-16">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-500/10 border border-cyan-500/30 mb-6">
                <span class="text-cyan-400">❓</span>
                <span class="text-cyan-400 text-sm font-medium uppercase tracking-wider">Bantuan & Informasi</span>
            </div>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4">
                Pertanyaan yang <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">Sering Diajukan</span>
            </h2>
            <p class="text-slate-400 text-lg max-w-2xl mx-auto">
                Temukan jawaban untuk pertanyaan umum tentang LogiCheck dan layanan kami.
            </p>
        </div>

        <div class="space-y-4">
            <div class="faq-item relative rounded-xl overflow-hidden transition-all duration-300 bg-slate-900/60 border border-slate-800 backdrop-blur-sm">
                <button class="faq-button w-full flex items-center justify-between p-5 md:p-6 text-left">
                    <div class="flex items-center gap-4">
                        <div class="faq-icon-box flex items-center justify-center w-8 h-8 rounded-lg bg-slate-800 text-slate-400 transition-all">
                            <span>✨</span>
                        </div>
                        <span class="font-semibold text-white text-base md:text-lg">Apa itu LogiCheck?</span>
                    </div>
                    <span class="faq-chevron text-slate-500 transition-transform duration-300">▼</span>
                </button>
                <div class="faq-answer max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 md:px-6 pb-5 md:pb-6 pt-0">
                        <div class="pl-12 border-l-2 border-cyan-500/30 ml-4">
                            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                                LogiCheck adalah platform agregator logistik yang memungkinkan bisnis UMKM untuk membandingkan dan memilih layanan pengiriman dari berbagai ekspedisi dalam satu dashboard terpadu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-item relative rounded-xl overflow-hidden transition-all duration-300 bg-slate-900/60 border border-slate-800 backdrop-blur-sm">
                <button class="faq-button w-full flex items-center justify-between p-5 md:p-6 text-left">
                    <div class="flex items-center gap-4">
                        <div class="faq-icon-box flex items-center justify-center w-8 h-8 rounded-lg bg-slate-800 text-slate-400 transition-all">
                            <span>✨</span>
                        </div>
                        <span class="font-semibold text-white text-base md:text-lg">Bagaimana cara kerja sistem ini?</span>
                    </div>
                    <span class="faq-chevron text-slate-500 transition-transform duration-300">▼</span>
                </button>
                <div class="faq-answer max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 md:px-6 pb-5 md:pb-6 pt-0">
                        <div class="pl-12 border-l-2 border-cyan-500/30 ml-4">
                            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                                Sistem kami terhubung langsung dengan API ekspedisi. Saat Anda memasukkan data, sistem otomatis menampilkan perbandingan harga. Anda tinggal pilih, cetak label, dan pickup akan dijadwalkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-item relative rounded-xl overflow-hidden transition-all duration-300 bg-slate-900/60 border border-slate-800 backdrop-blur-sm">
                <button class="faq-button w-full flex items-center justify-between p-5 md:p-6 text-left">
                    <div class="flex items-center gap-4">
                        <div class="faq-icon-box flex items-center justify-center w-8 h-8 rounded-lg bg-slate-800 text-slate-400 transition-all">
                            <span>✨</span>
                        </div>
                        <span class="font-semibold text-white text-base md:text-lg">Apakah ada biaya pendaftaran?</span>
                    </div>
                    <span class="faq-chevron text-slate-500 transition-transform duration-300">▼</span>
                </button>
                <div class="faq-answer max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 md:px-6 pb-5 md:pb-6 pt-0">
                        <div class="pl-12 border-l-2 border-cyan-500/30 ml-4">
                            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                                Tidak! LogiCheck sepenuhnya GRATIS. Anda hanya membayar biaya pengiriman sesuai tarif ekspedisi yang Anda pilih.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <p class="text-slate-500 mb-4 text-sm">Masih punya pertanyaan lain?</p>
            <button class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 font-semibold hover:bg-cyan-500/20 transition duration-300">
                Hubungi Tim Support Kami
            </button>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', () => {
            const item = button.parentElement;
            const answer = item.querySelector('.faq-answer');
            const chevron = item.querySelector('.faq-chevron');
            const iconBox = item.querySelector('.faq-icon-box');

            // Toggle Class
            const isOpen = answer.style.maxHeight;

            // Reset all others (Optional: Close others when one opens)
            document.querySelectorAll('.faq-answer').forEach(el => el.style.maxHeight = null);
            document.querySelectorAll('.faq-answer').forEach(el => el.classList.add('opacity-0'));
            document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('border-cyan-500', 'bg-slate-800/80'));

            if (!isOpen) {
                answer.style.maxHeight = answer.scrollHeight + "px";
                answer.classList.remove('opacity-0');
                item.classList.add('border-cyan-500', 'bg-slate-800/80');
                chevron.style.transform = "rotate(180deg)";
                iconBox.classList.add('bg-cyan-500/20', 'text-cyan-400');
            } else {
                answer.style.maxHeight = null;
                answer.classList.add('opacity-0');
                item.classList.remove('border-cyan-500', 'bg-slate-800/80');
                chevron.style.transform = "rotate(0deg)";
                iconBox.classList.remove('bg-cyan-500/20', 'text-cyan-400');
            }
        });
    });
</script>

<section id="service-showcase" class="relative py-24 overflow-hidden bg-[#0f172a]">
    <div class="absolute inset-0 bg-gradient-to-b from-[#0f172a] via-[#0a1628] to-[#0f172a]"></div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            
            <div class="relative order-2 lg:order-1">
                <div class="absolute inset-0 opacity-20 scale-125 lg:scale-150">
                    <svg viewBox="0 0 800 400" class="w-full h-full">
                        <defs>
                            <linearGradient id="mapGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#00e1ff" stop-opacity="0.3" />
                                <stop offset="100%" stop-color="#0066ff" stop-opacity="0.1" />
                            </linearGradient>
                        </defs>
                        <ellipse cx="150" cy="200" rx="80" ry="30" fill="url(#mapGradient)" />
                        <ellipse cx="280" cy="180" rx="60" ry="25" fill="url(#mapGradient)" />
                        <ellipse cx="480" cy="190" rx="70" ry="28" fill="url(#mapGradient)" />
                        <ellipse cx="600" cy="210" rx="90" ry="35" fill="url(#mapGradient)" />
                        <path d="M150 200 Q220 150 280 180 Q430 180 480 190 Q540 170 600 210" 
                              stroke="url(#mapGradient)" stroke-width="2" fill="none" stroke-dasharray="5,5" />
                    </svg>
                </div>

                <div class="relative flex justify-center scale-90 sm:scale-100">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-[#00e1ff]/20 rounded-full blur-3xl"></div>
                    
                    <div class="relative w-64 sm:w-72 bg-gradient-to-b from-gray-800 to-gray-900 rounded-[3rem] p-2 shadow-2xl border border-[#00e1ff]/30">
                        <div class="bg-[#0f172a] rounded-[2.5rem] overflow-hidden">
                            <div class="px-6 pt-8 pb-4 flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-[#00e1ff] to-[#0066ff] flex items-center justify-center text-white text-xs">📦</div>
                                    <span class="text-white font-bold text-sm">LogiCheck</span>
                                </div>
                                <div class="w-8 h-8 rounded-full bg-white/10 p-1">
                                    <div class="w-full h-full rounded-full bg-gradient-to-br from-[#00e1ff] to-[#0066ff]"></div>
                                </div>
                            </div>
                            <div class="px-4 mb-4">
                                <div class="bg-[#1e293b] border border-[#00e1ff]/30 rounded-xl p-3">
                                    <p class="text-white/60 text-[10px]">Saldo Aktif</p>
                                    <p class="text-white font-bold text-lg leading-none">Rp 2.450.000</p>
                                    <p class="text-green-400 text-[10px] mt-2 italic">↑ +12% bulan ini</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2 px-4 mb-4">
                                <div class="bg-white/5 rounded-lg p-2 border border-white/10">
                                    <span class="text-[#00e1ff] text-xs">📦</span>
                                    <p class="text-white font-bold text-xs">1,247</p>
                                    <p class="text-white/40 text-[8px]">Terkirim</p>
                                </div>
                                <div class="bg-white/5 rounded-lg p-2 border border-white/10">
                                    <span class="text-[#00e1ff] text-xs">🚚</span>
                                    <p class="text-white font-bold text-xs">23</p>
                                    <p class="text-white/40 text-[8px]">Perjalanan</p>
                                </div>
                            </div>
                            <div class="flex justify-around py-4 border-t border-white/5 bg-[#0a101f]">
                                <div class="text-[10px] text-[#00e1ff]">●</div>
                                <div class="text-[10px] text-white/20">■</div>
                                <div class="text-[10px] text-white/20">▲</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -right-4 top-20 bg-[#1e293b]/90 backdrop-blur-sm rounded-lg px-3 py-2 border border-[#00e1ff]/30 shadow-lg animate-bounce duration-[3000ms]">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></div>
                            <span class="text-white text-[10px] font-medium">Live Tracking</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-1 lg:order-2 space-y-6">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#00e1ff]/10 border border-[#00e1ff]/30">
                    <span class="text-[#00e1ff]">⚡</span>
                    <span class="text-[#00e1ff] text-sm font-medium">Smart Shipping Platform</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white leading-tight">
                    Kirim Paket Sekarang Jadi 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00e1ff] to-[#0088ff] drop-shadow-[0_0_25px_rgba(0,225,255,0.3)]">
                        Jauh Lebih Cerdas
                    </span>
                </h2>

                <p class="text-slate-400 text-lg leading-relaxed">
                    LogiCheck mendukung semua jenis pengiriman: <span class="text-white">Instan, Same Day, Reguler</span>, hingga <span class="text-[#00e1ff] font-semibold italic text-sm">Kargo Kikir</span>.
                </p>

                <ul class="space-y-4 pt-4">
                    <li class="flex items-start gap-4 group">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-gradient-to-br from-[#00e1ff] to-[#0066ff] flex items-center justify-center text-white text-xs shadow-[0_0_15px_rgba(0,225,255,0.4)] group-hover:scale-110 transition-all">✓</div>
                        <p class="text-slate-300 text-sm group-hover:text-white transition-colors">Akses harga agen termurah untuk semua rute pengiriman.</p>
                    </li>
                    <li class="flex items-start gap-4 group">
                        <div class="flex-shrink-0 w-6 h-6 rounded-full bg-gradient-to-br from-[#00e1ff] to-[#0066ff] flex items-center justify-center text-white text-xs shadow-[0_0_15px_rgba(0,225,255,0.4)] group-hover:scale-110 transition-all">✓</div>
                        <p class="text-slate-300 text-sm group-hover:text-white transition-colors">Cetak label otomatis & request pickup sekali klik.</p>
                    </li>
                </ul>

                <div class="flex flex-wrap gap-4 pt-6">
                    <button class="px-8 py-3 rounded-full font-bold text-[#0f172a] bg-[#00e1ff] shadow-[0_0_30px_rgba(0,225,255,0.4)] hover:scale-105 transition-all">
                        Mulai Sekarang
                    </button>
                    <button class="px-8 py-3 rounded-full font-bold text-[#00e1ff] border border-[#00e1ff]/50 hover:bg-[#00e1ff]/5 transition-all">
                        Pelajari Lanjut
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="fixed bottom-6 right-6 z-50">
    <div id="chat-popup" class="hidden absolute bottom-20 right-0 w-80 rounded-2xl bg-slate-900 border border-slate-800 shadow-2xl overflow-hidden opacity-0 transform translate-y-4 transition-all duration-300" style="box-shadow: 0 0 40px rgba(0, 225, 255, 0.2);">
        
        <div class="bg-gradient-to-r from-cyan-500/20 to-pink-500/20 p-4 border-b border-white/10">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center">
                            <span class="text-cyan-400">💬</span>
                        </div>
                        <div class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-green-500 rounded-full border-2 border-slate-900"></div>
                    </div>
                    <div>
                        <p class="font-semibold text-white text-sm">LogiCheck Support</p>
                        <p class="text-[10px] text-slate-400 font-medium">Online - Siap membantu</p>
                    </div>
                </div>
                <button id="close-chat-btn" class="text-slate-400 hover:text-white transition-colors">
                    ✕
                </button>
            </div>
        </div>

        <div class="p-4 h-48 bg-slate-900/50 overflow-y-auto">
            <div class="bg-slate-800/80 rounded-lg p-3 max-w-[85%] border border-white/5">
                <p class="text-sm text-slate-200">
                    Halo! Ada yang bisa kami bantu terkait pengiriman Anda?
                </p>
                <p class="text-[10px] text-slate-500 mt-2">10:30 AM</p>
            </div>
        </div>

        <div class="p-4 border-t border-white/10 bg-slate-900">
            <div class="flex gap-2">
                <input type="text" placeholder="Ketik pesan..." class="flex-1 bg-slate-950 border border-slate-800 rounded-lg px-4 py-2 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 transition-all">
                <button class="bg-cyan-500 text-slate-950 rounded-lg px-4 py-2 text-xs font-bold hover:bg-cyan-400 transition-colors shadow-[0_0_15px_rgba(0,225,255,0.3)]">
                    Kirim
                </button>
            </div>
        </div>
    </div>

    <button id="toggle-chat-btn" class="relative w-14 h-14 rounded-full bg-gradient-to-r from-cyan-400 to-pink-500 flex items-center justify-center text-slate-900 hover:scale-110 transition-transform duration-300" style="box-shadow: 0 0 30px rgba(0, 225, 255, 0.5), 0 0 60px rgba(240, 0, 255, 0.3);">
        <span id="chat-icon" class="text-2xl">💬</span>
        <span id="close-icon" class="hidden text-2xl">✕</span>
        
        <span id="pulse-ring" class="absolute inset-0 rounded-full bg-cyan-400/30 animate-ping"></span>
    </button>
</div>

<script>
    const toggleBtn = document.getElementById('toggle-chat-btn');
    const closeBtn = document.getElementById('close-chat-btn');
    const popup = document.getElementById('chat-popup');
    const chatIcon = document.getElementById('chat-icon');
    const closeIcon = document.getElementById('close-icon');
    const pulseRing = document.getElementById('pulse-ring');

    function toggleChat() {
        const isHidden = popup.classList.contains('hidden');
        
        if (isHidden) {
            popup.classList.remove('hidden');
            setTimeout(() => {
                popup.classList.remove('opacity-0', 'translate-y-4');
                popup.classList.add('opacity-100', 'translate-y-0');
            }, 10);
            chatIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            pulseRing.classList.add('hidden');
        } else {
            popup.classList.add('opacity-0', 'translate-y-4');
            popup.classList.remove('opacity-100', 'translate-y-0');
            setTimeout(() => {
                popup.classList.add('hidden');
            }, 300);
            chatIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            pulseRing.classList.remove('hidden');
        }
    }

    toggleBtn.addEventListener('click', toggleChat);
    closeBtn.addEventListener('click', toggleChat);
</script>



</body>
</html>