@extends('layouts.public')

@section('content')
<style>
    .glass-card { background: rgba(255, 255, 255, 0.02); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.05); transition: all 0.3s ease; }
    .glass-card:hover { border-color: #22c55e; background: rgba(34, 211, 94, 0.03); }
    .quote-glow { border-left: 4px solid #22c55e; background: linear-gradient(90deg, rgba(34, 211, 94, 0.1) 0%, transparent 100%); }
    .text-outline { -webkit-text-stroke: 1px rgba(255,255,255,0.2); color: transparent; }
</style>

<div class="bg-black min-h-screen text-gray-300">

    <section class="relative pt-40 pb-20 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-green-500/5 blur-[120px] rounded-full"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-6xl md:text-8xl font-black text-white mb-6 tracking-tighter">
                NOSSA <span class="text-green-500">ESSÊNCIA</span>
            </h2>
            <p class="max-w-3xl mx-auto text-xl text-gray-400 leading-relaxed italic">
                A KambambiForex é uma academia de trading profissional criada para formar traders conscientes, disciplinados e preparados para o mercado real.
            </p>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="glass-card p-10 rounded-[40px]">
                    <div class="text-green-500 text-3xl mb-6">👁️</div>
                    <h3 class="text-white text-2xl font-bold mb-4 uppercase tracking-tighter">Visão</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Formar traders consistentes, alinhando estratégia, fé e psicologia, respeitando o processo do mercado financeiro.
                    </p>
                </div>

                <div class="glass-card p-10 rounded-[40px]">
                    <div class="text-green-500 text-3xl mb-6">🎯</div>
                    <h3 class="text-white text-2xl font-bold mb-4 uppercase tracking-tighter">Objetivo</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Ensinar um método real, sem promessas falsas, focado na gestão de risco e crescimento sustentável.
                    </p>
                </div>

                <div class="glass-card p-10 rounded-[40px] border-green-500/30">
                    <div class="text-green-500 text-3xl mb-6">🛡️</div>
                    <h3 class="text-white text-2xl font-bold mb-4 uppercase tracking-tighter">Foco</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Disciplina Operacional</li>
                        <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Prática Consciente</li>
                        <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Gestão de Risco</li>
                        <li class="flex items-center gap-3"><span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span> Domínio Emocional</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#050505]">
        <div class="container mx-auto px-6 text-center">
            <span class="text-green-500 font-bold tracking-[10px] uppercase text-xs">Filosofia</span>
            <div class="mt-12 max-w-4xl mx-auto">
                <blockquote class="quote-glow p-12 rounded-2xl">
                    <p class="text-3xl md:text-5xl font-light text-white leading-tight italic">
                        “A sabedoria vem de <span class="text-green-500 font-black">Deus</span>. A estratégia vem da disciplina. O crescimento vem da prática. A vitória vem da fé e do trabalho.”
                    </p>
                </blockquote>
            </div>
        </div>
    </section>

    <section class="py-32 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-16">
                <div class="md:w-1/2">
                    <h2 class="text-5xl font-black text-white mb-8 leading-none uppercase">
                        Trading com <br><span class="text-outline">Verdade e Consciência</span>
                    </h2>
                    <div class="space-y-6 text-lg text-gray-400">
                        <p>O maior inimigo do trader não é o mercado, mas o seu próprio eu interior. Ganância e medo destroem contas.</p>
                        <p class="text-white font-semibold">Na KambambiForex não vendemos ilusão. Ensinamos a verdade: o Forex paga, mas exige processo.</p>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="w-full aspect-square bg-green-500/10 rounded-full flex items-center justify-center border border-green-500/20">
                        <div class="text-center">
                             <span class="block text-8xl mb-4">🧠</span>
                             <span class="text-green-500 font-bold tracking-widest uppercase">Mente Blindada</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 border-t border-white/5 bg-black">
        <div class="container mx-auto px-6 text-center">
            <h3 class="text-white font-bold mb-6">Referências e Ecossistema de Mercado</h3>
            <p class="max-w-2xl mx-auto text-sm text-gray-500 leading-relaxed mb-8 uppercase tracking-widest">
                Utilizamos como referência educacional plataformas como Deriv, Exness, The5ers e FundedNext, alinhando nossos alunos à realidade do mercado internacional.
            </p>
            <div class="inline-block px-4 py-2 bg-white/5 rounded-lg border border-white/10 text-[10px] text-gray-600 uppercase">
                *A KambambiForex não é corretora nem prop firm. As empresas citadas são referências educacionais.
            </div>
        </div>
    </section>

</div>
@endsection
