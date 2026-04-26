<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk | LogiCheck</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#020617] text-white min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    
    <div class="absolute -top-40 -left-40 w-80 h-80 bg-cyan-500/5 rounded-full blur-[100px]"></div>

    <div class="max-w-[380px] w-full bg-slate-900/40 backdrop-blur-xl rounded-[2rem] p-7 border border-slate-800 shadow-2xl relative z-10">
        
        <div class="mb-5">
            <div class="flex items-center gap-2 mb-3">
                <div class="w-5 h-5 bg-cyan-500 rounded shadow-[0_0_8px_rgba(6,182,212,0.4)]"></div>
                <span class="text-base font-black tracking-tighter">LogiCheck</span>
            </div>
            <h2 class="text-2xl font-extrabold tracking-tight">Halo Sahabat LC!</h2>
            <p class="text-slate-400 mt-1 text-xs leading-relaxed">Silakan masukkan email dan kata sandi Anda.</p>
        </div>

        <form action="<?= base_url('login/auth') ?>" method="POST" class="space-y-4">
            <?= csrf_field(); ?>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-1.5 ml-1">Email <span class="text-red-500">*</span></label>
                <input type="email" name="email" required placeholder="Masukkan email" 
                    class="w-full px-4 py-3 rounded-xl bg-slate-950/50 border border-slate-800 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 transition-all">
            </div>

            <div>
                <label class="block text-[10px] font-bold text-cyan-400 uppercase tracking-widest mb-1.5 ml-1">Kata Sandi <span class="text-red-500">*</span></label>
                <input type="password" name="password" required placeholder="Masukkan kata sandi" 
                    class="w-full px-4 py-3 rounded-xl bg-slate-950/50 border border-slate-800 text-sm text-white placeholder:text-slate-600 focus:outline-none focus:ring-2 focus:ring-cyan-500/50 focus:border-cyan-500 transition-all">
                <div class="text-right">
                    <a href="#" class="inline-block mt-1.5 text-[10px] font-bold text-cyan-500 hover:text-cyan-300 transition-colors">Lupa Kata Sandi?</a>
                </div>
            </div>

            <div class="pt-1">
                <button type="submit" 
                    class="w-full bg-cyan-500 hover:bg-cyan-400 text-[#020617] font-black py-3 rounded-full text-sm shadow-lg shadow-cyan-500/20 transition-all active:scale-[0.97]">
                    Lanjutkan
                </button>
            </div>
        </form>

        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-slate-800"></div>
            </div>
            <div class="relative flex justify-center text-[10px] uppercase">
                <span class="bg-[#0b1224] px-3 text-slate-500 font-bold">atau</span>
            </div>
        </div>

        <div class="space-y-2">
            <button class="w-full py-2.5 px-4 rounded-full border border-slate-800 bg-slate-900/50 hover:bg-slate-800 transition-all flex items-center justify-center gap-2 font-semibold text-xs">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-3.5 h-3.5 invert" alt="Apple">
                Lanjutkan dengan Apple
            </button>
            <button class="w-full py-2.5 px-4 rounded-full border border-slate-800 bg-slate-900/50 hover:bg-slate-800 transition-all flex items-center justify-center gap-2 font-semibold text-xs">
                <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" class="w-3.5 h-3.5" alt="Google">
                Lanjutkan dengan Google
            </button>
        </div>

        <p class="text-center text-[11px] text-slate-500 mt-6">
            Belum punya akun? 
            <a href="<?= base_url('register') ?>" class="text-cyan-400 font-bold hover:text-cyan-300 transition-colors ml-0.5">Daftar Sekarang</a>
        </p>
    </div>
</div>
</body>
</html>