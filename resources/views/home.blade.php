@extends('layouts.public')

@section('content')
<style>
    @keyframes glow { 0% { box-shadow: 0 0 5px rgba(34, 211, 94, 0.2); } 50% { box-shadow: 0 0 20px rgba(34, 211, 94, 0.5); } 100% { box-shadow: 0 0 5px rgba(34, 211, 94, 0.2); } }
    .hero-glow { background: radial-gradient(circle at center, rgba(34, 211, 94, 0.15) 0%, transparent 70%); }
    .card-glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.08); transition: all 0.4s ease; }
    .card-glass:hover { border-color: #22c55e; background: rgba(34, 211, 94, 0.05); transform: translateY(-10px); }
    .text-gradient { background: linear-gradient(180deg, #fff 0%, #22c55e 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
    .grid-bg { background-image: linear-gradient(rgba(255,255,255,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.05) 1px, transparent 1px); background-size: 50px 50px; }
</style>

<div class="bg-black min-h-screen grid-bg">
    <section class="relative pt-32 pb-20 overflow-hidden hero-glow">
        <div class="container mx-auto px-6 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-500/10 border border-green-500/20 text-green-400 text-xs font-bold uppercase tracking-[4px] mb-8 animate-pulse">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                Mercado Financeiro Real
            </div>

            <h1 class="text-6xl md:text-9xl font-black text-white leading-none mb-6 tracking-tighter">
                O CÉU É O <br> <span class="text-gradient">LIMITE</span>
            </h1>

            <p class="max-w-2xl mx-auto text-gray-400 text-lg md:text-xl mb-12 leading-relaxed">
                Na <span class="text-white">KambambiForex</span>, transformamos o caos do mercado em lucro através da disciplina e fé. Sem ilusões, apenas o processo.
            </p>

            <div class="flex flex-wrap justify-center gap-6">
    <a href="{{ url('/servicos') }}" class="px-10 py-5 bg-green-500 text-black font-black rounded-2xl hover:scale-105 transition-all shadow-[0_0_40px_rgba(34,197,94,0.4)]">
        COMEÇAR JORNADA ↗
    </a>
    <a href="{{ url('/galeria') }}" class="px-10 py-5 border border-white/20 text-white font-bold rounded-2xl hover:bg-white/10 transition-all">
        NOSSO MÉTODO
    </a>
</div>
        </div>
    </section>

   <section class="py-20 bg-black/50 border-y border-white/10">
    <div class="container mx-auto px-6">
        <h3 class="text-center text-gray-500 text-[10px] uppercase tracking-[5px] mb-12 font-bold">Referências de Execução</h3>

        <div class="grid grid-cols-2 md:grid-cols-5 gap-8 items-center justify-center">

            <a href="https://deriv.partners/rx?ca=kambambiforex..." target="_blank" class="flex flex-col items-center group">
                <img src="https://deriv.com/static/863690d70081079d71c48f219f86f7b1/deriv-logo-red.svg" alt="Deriv" class="h-8 mb-3 opacity-50 group-hover:opacity-100 transition-all">
                <span class="text-[9px] text-gray-500 font-bold tracking-widest group-hover:text-green-500 uppercase">Deriv</span>
            </a>

            <a href="https://one.exnessonelink.com/a/5upnk749jz" target="_blank" class="flex flex-col items-center group">
                <img src="https://seeklogo.com/images/E/exness-logo-D478A731F7-seeklogo.com.png" alt="Exness" class="h-8 mb-3 opacity-50 group-hover:opacity-100 transition-all grayscale group-hover:grayscale-0">
                <span class="text-[9px] text-gray-500 font-bold tracking-widest group-hover:text-green-500 uppercase">Exness</span>
            </a>

            <a href="https://www.the5ers.com/?afmc=uol" target="_blank" class="flex flex-col items-center group">
                <img src="https://www.the5ers.com/wp-content/uploads/2021/06/the5ers-logo-gold.png" alt="The5ers" class="h-8 mb-3 opacity-50 group-hover:opacity-100 transition-all grayscale group-hover:grayscale-0">
                <span class="text-[9px] text-gray-500 font-bold tracking-widest group-hover:text-green-500 uppercase">The5ers</span>
            </a>

            <a href="https://checkout.goatfundedtrader.com/aff/KambambiForex/" target="_blank" class="flex flex-col items-center group">
                <div class="text-2xl mb-2 grayscale group-hover:grayscale-0 opacity-50 group-hover:opacity-100 transition-all">🐐</div>
                <span class="text-[9px] text-gray-500 font-bold tracking-widest group-hover:text-green-500 uppercase italic">Goat Funded</span>
            </a>

            <a href="https://seulink-fundednext.com" target="_blank" class="flex flex-col items-center group">
                <img src="https://fundednext.com/wp-content/uploads/2022/03/Logo-White.png" alt="FundedNext" class="h-5 mb-3 opacity-50 group-hover:opacity-100 transition-all">
                <span class="text-[9px] text-gray-500 font-bold tracking-widest group-hover:text-green-500 uppercase">FundedNext</span>
            </a>

        </div>
    </div>
</section>

    <section class="py-32">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-20 items-center">
                <div class="md:w-1/2 space-y-8">
                    <h2 class="text-5xl font-black text-white leading-tight">
                        Por que a <br><span class="text-green-500 italic">KambambiForex?</span>
                    </h2>
                    <p class="text-gray-400 text-xl leading-relaxed">
                        Não somos apenas gráficos. Somos <span class="text-white">psicologia</span>. No mercado, o seu maior inimigo é você mesmo. Nós te ensinamos a vencer essa batalha.
                    </p>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 card-glass rounded-2xl">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-black font-bold">01</div>
                            <span class="text-white font-bold text-lg">Estratégia Matemática Reais</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 card-glass rounded-2xl">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-black font-bold">02</div>
                            <span class="text-white font-bold text-lg">Psicologia de Alta Performance</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 card-glass rounded-2xl">
                            <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-black font-bold">03</div>
                            <span class="text-white font-bold text-lg">Consistência com Fé</span>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="relative p-1 bg-gradient-to-br from-green-500 to-emerald-900 rounded-[40px] shadow-2xl overflow-hidden">
                        <div class="bg-black rounded-[38px] p-12 text-center">
                             <div class="text-8xl mb-6">📈</div>
                             <h4 class="text-white font-black text-2xl mb-4">MÉTODO PROVADO</h4>
                             <p class="text-gray-500">Respeite o processo, o tempo e a disciplina. O céu é o limite para quem não desiste.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
