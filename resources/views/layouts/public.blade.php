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
            background: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(34, 197, 94, 0.2);
        }
        /* Ajuste para o menu mobile não sumir no topo */
        #menu-mobile {
            top: 79px; /* Altura exata do header */
            max-height: calc(100vh - 80px);
            overflow-y: auto;
        }
    </style>
</head>
<body class="bg-black text-gray-200 antialiased selection:bg-green-500 selection:text-black">

    <header class="fixed top-0 w-full z-[100] glass-nav">
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

                <a href="{{ url('/calculadora') }}" class="text-xs bg-white/5 border border-white/10 px-4 py-2 rounded-lg hover:bg-green-500 hover:text-black hover:border-green-500 transition-all font-bold">
                    Calculadora
                </a>
            </div>

            <button id="menu-toggle" class="md:hidden text-green-500 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>

        <div id="menu-mobile" class="hidden md:hidden absolute left-0 w-full bg-black/95 border-b border-green-500/30 shadow-2xl">
            <div class="flex flex-col px-8 py-8 space-y-6">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-white border-b border-white/5 pb-2">Home</a>
                <a href="{{ url('/sobre') }}" class="text-lg font-semibold text-white border-b border-white/5 pb-2">Sobre</a>
                <a href="{{ url('/servicos') }}" class="text-lg font-semibold text-white border-b border-white/5 pb-2">Serviços</a>
                <a href="{{ url('/galeria') }}" class="text-lg font-semibold text-white border-b border-white/5 pb-2">Galeria</a>
                <a href="{{ url('/contato') }}" class="text-lg font-semibold text-white border-b border-white/5 pb-2">Contato</a>

                <a href="{{ url('/calculadora') }}" class="text-center text-md bg-green-500 text-black py-4 rounded-xl font-black uppercase tracking-widest shadow-lg shadow-green-500/20">
                    Calculadora
                </a>
            </div>
        </div>
    </header>

    <main class="pt-20"> @yield('content')
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
            <a href="https://wa.me/244936461548" target="_blank" class="text-gray-400 hover:text-green-500 transition-all uppercase text-[10px] font-bold tracking-widest">WhatsApp</a>
            <a href="https://www.instagram.com/kambambiforex" target="_blank" class="text-gray-400 hover:text-pink-500 transition-all uppercase text-[10px] font-bold tracking-widest">Instagram</a>
            <a href="https://www.youtube.com/@kambambiforex" target="_blank" class="text-gray-400 hover:text-red-600 transition-all uppercase text-[10px] font-bold tracking-widest">YouTube</a>
            <a href="https://www.facebook.com/share/1NGKEngoQJ/" target="_blank" class="text-gray-400 hover:text-blue-600 transition-all uppercase text-[10px] font-bold tracking-widest">Facebook</a>
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
            const icon = document.getElementById("menu-icon");

            toggle.addEventListener("click", function () {
                menu.classList.toggle("hidden");

                // Muda o ícone de hambúrguer para um 'X' quando aberto
                if (menu.classList.contains("hidden")) {
                    icon.setAttribute("d", "M4 6h16M4 12h16m-7 6h7");
                } else {
                    icon.setAttribute("d", "M6 18L18 6M6 6l12 12");
                }
            });

            // Fecha o menu ao clicar num link
            const links = menu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    menu.classList.add('hidden');
                    icon.setAttribute("d", "M4 6h16M4 12h16m-7 6h7");
                });
            });
        });
    </script>
</body>
</html>
