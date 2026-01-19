<!DOCTYPE html>
<html lang="pt" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KambambiForex | O céu é o limite</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }
        .glass-nav {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-black text-gray-200 antialiased selection:bg-green-500 selection:text-black">

    <header class="fixed top-0 w-full z-50 glass-nav">
        <nav class="container mx-auto px-6 h-20 flex items-center justify-between">

            <a href="{{ url('/') }}" class="group flex flex-col leading-none">
                <span class="text-2xl font-black tracking-tighter text-white group-hover:text-green-400 transition-colors">
                    KAMBAMBI<span class="text-green-500">FOREX</span>
                </span>
                <span class="text-[10px] uppercase tracking-[3px] text-gray-500 group-hover:text-gray-300 transition-colors">
                    O céu é o limite
                </span>
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-sm font-medium hover:text-green-500 transition-colors">Home</a>
                <a href="{{ url('/sobre') }}" class="text-sm font-medium hover:text-green-500 transition-colors">Sobre</a>
                <a href="{{ url('/servicos') }}" class="text-sm font-medium hover:text-green-500 transition-colors">Serviços</a>
                <a href="{{ url('/galeria') }}" class="text-sm font-medium hover:text-green-500 transition-colors">Galeria</a>
                <a href="{{ url('/contato') }}" class="text-sm font-medium hover:text-green-500 transition-colors">Contato</a>

                <div class="h-4 w-[1px] bg-gray-700"></div>

                <a href="{{ url('/calculadora') }}" class="text-xs bg-white/5 border border-white/10 px-3 py-1.5 rounded-lg hover:bg-green-500 hover:text-black hover:border-green-500 transition-all">
                    Calculadora
                </a>


            </div>
            <div id="menu-mobile" class="hidden md:hidden mt-6 space-y-4">
                <a href="{{ url('/') }}" class="block text-sm hover:text-green-500">Home</a>
                <a href="{{ url('/sobre') }}" class="block text-sm hover:text-green-500">Sobre</a>
                <a href="{{ url('/servicos') }}" class="block text-sm hover:text-green-500">Serviços</a>
                <a href="{{ url('/galeria') }}" class="block text-sm hover:text-green-500">Galeria</a>
                <a href="{{ url('/contato') }}" class="block text-sm hover:text-green-500">Contato</a>
            </div>


           <button id="menu-toggle" class="md:hidden text-white">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
<footer class="bg-[#050505] border-t border-white/5 py-12">
    <div class="container mx-auto px-6 text-center">
        <div class="mb-8">
            <div class="text-2xl font-black text-white tracking-tighter mb-2">
                KAMBAMBI<span class="text-green-500">FOREX</span>
            </div>
            <p class="text-gray-500 text-[10px] uppercase tracking-[4px]">Disciplina • Fé • Consistência</p>
        </div>

        <div class="flex flex-wrap justify-center gap-6 mb-10">
            <a href="#" class="group flex items-center gap-2 text-gray-400 hover:text-[#1877F2] transition-all">
                <span class="text-xs font-bold uppercase tracking-widest">Facebook</span>
            </a>
            <a href="#" class="group flex items-center gap-2 text-gray-400 hover:text-[#E4405F] transition-all">
                <span class="text-xs font-bold uppercase tracking-widest">Instagram</span>
            </a>
            <a href="#" class="group flex items-center gap-2 text-gray-400 hover:text-[#FF0000] transition-all">
                <span class="text-xs font-bold uppercase tracking-widest">YouTube</span>
            </a>
            <a href="#" class="group flex items-center gap-2 text-gray-400 hover:text-white transition-all">
                <span class="text-xs font-bold uppercase tracking-widest">X (Twitter)</span>
            </a>
            <a href="#" class="group flex items-center gap-2 text-gray-400 hover:text-[#00f2ea] transition-all">
                <span class="text-xs font-bold uppercase tracking-widest">TikTok</span>
            </a>
            <a href="#" class="group flex items-center gap-2 text-gray-400 hover:text-[#0A66C2] transition-all">
                <span class="text-xs font-bold uppercase tracking-widest">LinkedIn</span>
            </a>
        </div>

        <div class="text-gray-600 text-[10px] uppercase tracking-widest border-t border-white/5 pt-8">
            © {{ date('Y') }} KambambiForex. O céu é o limite.
        </div>
    </div>
</footer>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu-mobile");

    toggle.addEventListener("click", function () {
        menu.classList.toggle("hidden");
    });
});
</script>

</body>
</html>
