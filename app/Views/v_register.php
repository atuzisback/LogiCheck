<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun | LogiCheck</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#020617] text-white min-h-screen flex items-center justify-center p-4 relative overflow-x-hidden">
    
    <div class="absolute -bottom-40 -right-40 w-80 h-80 bg-cyan-500/5 rounded-full blur-[100px]"></div>

    <div class="max-w-[420px] w-full bg-slate-900/40 backdrop-blur-xl rounded-[2rem] p-7 border border-slate-800 shadow-2xl relative z-10 my-4">
        
        <div class="mb-5">
            <div class="flex items-center gap-2 mb-3">
                <div class="w-5 h-5 bg-cyan-500 rounded shadow-[0_0_8px_rgba(6,182,212,0.4)]"></div>
                <span class="text-base font-black tracking-tighter">LogiCheck</span>
            </div>
            <h2 class="text-2xl font-extrabold tracking-tight">Buat Akun Baru</h2>
            <p class="text-slate-400 mt-1 text-xs">Lengkapi data berikut untuk bergabung dengan LogiCheck.</p>
        </div>

        <form action="<?= base_url('register/save') ?>" method="POST" class="space-y-3.5">
            <?= csrf_field(); ?>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-1.5 ml-1">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" name="nama" required placeholder="Masukkan nama" 
                    class="w-full px-4 py-2.5 rounded-xl bg-slate-950/50 border border-slate-800 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 transition-all">
            </div>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-1.5 ml-1">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" required placeholder="Masukkan email" 
                    class="w-full px-4 py-2.5 rounded-xl bg-slate-950/50 border border-slate-800 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 transition-all">
            </div>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-1.5 ml-1">Nomor HP <span class="text-red-500">*</span></label>
                <div class="relative">
                    <input type="text" name="phone" required placeholder="+62 XXXXXXXXX" 
                        class="w-full px-4 py-2.5 rounded-xl bg-slate-950/50 border border-slate-800 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 transition-all">
                </div>
                <p class="text-[9px] text-slate-500 mt-1 ml-1 font-medium italic">Pastikan nomor ini terdaftar di WhatsApp</p>
            </div>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-1.5 ml-1">Kata Sandi <span class="text-red-500">*</span></label>
                <input type="password" name="password" required placeholder="Masukkan kata sandi" 
                    class="w-full px-4 py-2.5 rounded-xl bg-slate-950/50 border border-slate-800 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 transition-all">
            </div>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-2.5 ml-1">Kebutuhan Untuk? <span class="text-red-500">*</span></label>
                <div class="grid grid-cols-2 gap-3">
                    <label class="flex items-center justify-center py-2 px-3 bg-slate-950/50 border border-slate-800 rounded-xl cursor-pointer hover:border-cyan-500/50 transition-all group">
                        <input type="radio" name="kebutuhan" value="Personal" class="hidden peer" required>
                        <span class="text-xs text-slate-400 peer-checked:text-cyan-400 font-bold">Personal</span>
                    </label>
                    <label class="flex items-center justify-center py-2 px-3 bg-slate-950/50 border border-slate-800 rounded-xl cursor-pointer hover:border-cyan-500/50 transition-all group">
                        <input type="radio" name="kebutuhan" value="Business" class="hidden peer">
                        <span class="text-xs text-slate-400 peer-checked:text-cyan-400 font-bold">Business</span>
                    </label>
                </div>
            </div>

            <div class="flex items-start gap-2 px-1 pt-1">
                <input type="checkbox" id="terms" required class="mt-0.5 w-3.5 h-3.5 bg-slate-950 border-slate-800 rounded text-cyan-500 focus:ring-cyan-500">
                <label for="terms" class="text-[10px] text-slate-400 leading-normal">
                    Saya menyetujui <span class="text-cyan-400 font-bold cursor-pointer">Syarat & Ketentuan</span> serta <span class="text-cyan-400 font-bold cursor-pointer">Kebijakan Privasi</span> LogiCheck.
                </label>
            </div>

            <div class="pt-2">
                <button type="submit" 
                    class="w-full bg-cyan-500 hover:bg-cyan-400 text-[#020617] font-black py-3 rounded-full text-sm shadow-lg shadow-cyan-500/20 transition-all active:scale-[0.97]">
                    DAFTAR
                </button>
            </div>
        </form>

        <p class="text-center text-[11px] text-slate-500 mt-6">
            Sudah punya akun? 
            <a href="<?= base_url('login') ?>" class="text-cyan-400 font-bold hover:text-cyan-300 transition-colors ml-0.5">Masuk Sekarang</a>
        </p>
    </div>
</div>
</body>
</html>