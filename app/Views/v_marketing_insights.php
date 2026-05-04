<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Insights | LogiCheck</title>
    
    <!-- Framework & Fonts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #020617; 
        }
        /* Efek Glassmorphism yang disempurnakan */
        .glass { 
            background: rgba(15, 23, 42, 0.4); 
            backdrop-filter: blur(12px); 
            border: 1px solid rgba(255, 255, 255, 0.05); 
        }
    </style>
</head>
<body class="text-white min-h-screen p-6 relative overflow-x-hidden">
    
    <!-- Dekorasi Background (Glow Effect) -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-500/5 rounded-full blur-[120px] -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-blue-500/5 rounded-full blur-[100px] -z-10"></div>

    <div class="max-w-6xl mx-auto">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-4">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <div class="w-4 h-4 bg-cyan-500 rounded shadow-[0_0_8px_rgba(6,182,212,0.4)]"></div>
                    <span class="text-sm font-black tracking-tighter uppercase text-cyan-500">Marketing Analytics</span>
                </div>
                <h1 class="text-3xl font-extrabold tracking-tight italic">
                    Wawasan <span class="text-cyan-400">Pertumbuhan Bisnis</span>
                </h1>
                <p class="text-slate-400 text-sm mt-1">Analisis performa pengiriman untuk pengembangan bisnis Anda.</p>
            </div>
            <div class="flex gap-3">
                <button class="px-4 py-2 bg-slate-800 rounded-full text-xs font-bold hover:bg-slate-700 transition">Download Laporan</button>
                <button class="px-4 py-2 bg-cyan-500 text-[#020617] rounded-full text-xs font-black hover:bg-cyan-400 transition shadow-lg shadow-cyan-500/20">Upgrade Layanan</button>
            </div>
        </div>

        <!-- Grid Statistik Utama -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="glass p-6 rounded-[2rem]">
                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mb-1">Total Pengiriman</p>
                <h3 class="text-2xl font-black italic">1,247 <span class="text-cyan-400 text-xs ml-1">↑ 12%</span></h3>
            </div>
            <div class="glass p-6 rounded-[2rem]">
                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mb-1">Dana COD Cair</p>
                <h3 class="text-2xl font-black italic text-green-400">Rp 24.5M</h3>
            </div>
            <div class="glass p-6 rounded-[2rem]">
                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mb-1">Top Destinasi</p>
                <h3 class="text-2xl font-black italic">Surabaya</h3>
            </div>
            <div class="glass p-6 rounded-[2rem]">
                <p class="text-slate-400 text-[10px] uppercase font-bold tracking-widest mb-1">Kurir Favorit</p>
                <h3 class="text-2xl font-black italic text-cyan-400 text-sm uppercase">J&T Express</h3>
            </div>
        </div>

        <!-- Grafik & Analisis Strategis -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Grafik Tren -->
            <div class="lg:col-span-2 glass p-8 rounded-[2.5rem]">
                <h4 class="text-sm font-bold mb-6 text-cyan-400 uppercase italic">Tren Pengiriman Bulanan</h4>
                <canvas id="growthChart" height="180"></canvas>
            </div>

            <!-- Kartu Analisis Pemasaran (Gradient Border) -->
            <div class="bg-gradient-to-br from-cyan-500/20 to-transparent p-[1px] rounded-[2.5rem]">
                <div class="bg-[#050a18] p-8 rounded-[2.4rem] h-full border border-slate-800/50">
                    <h4 class="text-sm font-bold mb-6 text-cyan-400 uppercase italic">Rekomendasi Pemasaran</h4>
                    <ul class="space-y-5">
                        <li class="flex gap-3">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mt-1.5 shrink-0 shadow-[0_0_8px_rgba(34,211,238,0.6)]"></div>
                            <p class="text-xs text-slate-300 leading-relaxed">
                                <strong class="text-white block mb-1">Ekspansi Wilayah:</strong> 
                                Pesanan di <b>Surabaya</b> meningkat 25%. Pertimbangkan promo ongkir flat ke wilayah ini.
                            </p>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mt-1.5 shrink-0 shadow-[0_0_8px_rgba(34,211,238,0.6)]"></div>
                            <p class="text-xs text-slate-300 leading-relaxed">
                                <strong class="text-white block mb-1">Loyalty Program:</strong> 
                                40% pelanggan setia menggunakan <b>J&T Express</b>. Berikan voucher diskon khusus.
                            </p>
                        </li>
                        <li class="flex gap-3">
                            <div class="w-2 h-2 bg-cyan-400 rounded-full mt-1.5 shrink-0 shadow-[0_0_8px_rgba(34,211,238,0.6)]"></div>
                            <p class="text-xs text-slate-300 leading-relaxed">
                                <strong class="text-white block mb-1">Optimasi Stok:</strong> 
                                Lonjakan kiriman rutin terjadi di hari <b>Selasa</b>. Siapkan stok pada Senin malam.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script>
        const ctx = document.getElementById('growthChart').getContext('2d');
        
        // Membuat gradient untuk area grafik
        const gradient = ctx.createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(34, 211, 238, 0.2)');
        gradient.addColorStop(1, 'rgba(34, 211, 238, 0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Volume Pengiriman',
                    data: [400, 600, 550, 800, 950, 1247],
                    borderColor: '#22d3ee',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4,
                    borderWidth: 4,
                    pointRadius: 4,
                    pointBackgroundColor: '#22d3ee',
                    pointBorderColor: '#020617',
                    pointBorderWidth: 2,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { 
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#0f172a',
                        titleFont: { size: 12, weight: 'bold' },
                        bodyFont: { size: 12 },
                        padding: 12,
                        cornerRadius: 10,
                        displayColors: false
                    }
                },
                scales: {
                    y: { 
                        grid: { color: 'rgba(255,255,255,0.05)', drawBorder: false }, 
                        ticks: { color: '#64748b', font: { size: 10 } } 
                    },
                    x: { 
                        grid: { display: false }, 
                        ticks: { color: '#64748b', font: { size: 10 } } 
                    }
                }
            }
        });
    </script>
</body>
</html>