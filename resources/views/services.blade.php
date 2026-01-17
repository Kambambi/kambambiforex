@extends('layouts.public')

@section('content')
<style>
    .service-glow-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 32px;
        transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
        position: relative;
        overflow: hidden;
    }
    .service-glow-card:hover {
        transform: translateY(-12px);
        border-color: rgba(34, 197, 94, 0.4);
        background: rgba(34, 197, 94, 0.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(34, 197, 94, 0.1);
    }
    .service-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #22c55e 0%, #166534 100%);
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 24px;
        box-shadow: 0 10px 20px rgba(34, 197, 94, 0.2);
    }
    .text-balance {
        text-wrap: balance;
    }
</style>

<div class="bg-black min-h-screen pb-32">

    <section class="relative pt-40 pb-20 overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_30%_20%,_rgba(34,197,94,0.08)_0%,_transparent_50%)]"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-4 rounded-full bg-green-500/10 border border-green-500/20 text-green-500 text-[10px] font-black uppercase tracking-[5px] mb-6">
                Expertise & Resultados
            </span>
            <h2 class="text-6xl md:text-8xl font-black text-white mb-8 tracking-tighter uppercase">
                Nossos <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-emerald-600">Serviços</span>
            </h2>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg md:text-xl leading-relaxed text-balance">
                Formação completa para traders que desejam operar com <span class="text-white font-bold">disciplina</span>, <span class="text-white font-bold">consciência</span> e <span class="text-green-500">fé aplicada</span> ao mercado real.
            </p>
        </div>
    </section>

    <section>
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div class="service-glow-card p-10 group">
                    <div class="service-icon group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-chart-line text-black"></i>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-4 uppercase tracking-tighter">Formação de Traders</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Do iniciante ao avançado. Aprenda leitura de fluxo, estrutura de mercado e Price Action institucional para construir consistência duradoura.
                    </p>
                    <div class="mt-8 flex items-center gap-2 text-green-500 text-xs font-bold uppercase tracking-widest">
                        Nível Profissional <span class="h-px w-8 bg-green-500/30"></span>
                    </div>
                </div>

                <div class="service-glow-card p-10 group">
                    <div class="service-icon group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-brain text-black"></i>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-4 uppercase tracking-tighter">Psicologia do Trading</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Maturidade mental acima de tudo. Alinhamos fé, psicologia e técnica para eliminar a ganância e o medo da sua tomada de decisão.
                    </p>
                    <div class="mt-8 flex items-center gap-2 text-green-500 text-xs font-bold uppercase tracking-widest">
                        Controle Emocional <span class="h-px w-8 bg-green-500/30"></span>
                    </div>
                </div>

                <div class="service-glow-card p-10 group border-green-500/20">
                    <div class="service-icon group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-shield-halved text-black"></i>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-4 uppercase tracking-tighter">Gestão de Risco</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Sobreviva para vencer. Ensinamos preservação de capital, controle de drawdown e cálculos matemáticos para proteger o seu patrimônio.
                    </p>
                    <div class="mt-8 flex items-center gap-2 text-green-500 text-xs font-bold uppercase tracking-widest">
                        Segurança Financeira <span class="h-px w-8 bg-green-500/30"></span>
                    </div>
                </div>

                <div class="service-glow-card p-10 group">
                    <div class="service-icon group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-magnifying-glass-chart text-black"></i>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-4 uppercase tracking-tighter">Análises de Mercado</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Foco no Ouro (XAUUSD), Forex e Criptos. Análises estruturais diárias com viés educacional para você entender o "porquê" de cada movimento.
                    </p>
                    <div class="mt-8 flex items-center gap-2 text-green-500 text-xs font-bold uppercase tracking-widest">
                        Visão Estratégica <span class="h-px w-8 bg-green-500/30"></span>
                    </div>
                </div>

                <div class="service-glow-card p-10 group">
                    <div class="service-icon group-hover:scale-110 transition-transform duration-500">
                        <i class="fas fa-user-tie text-black"></i>
                    </div>
                    <h3 class="text-2xl font-black text-white mb-4 uppercase tracking-tighter">Mentorias</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        Aceleração direta. Acompanhamento próximo para corrigir erros técnicos e psicológicos, lapidando o seu operacional em tempo real.
                    </p>
                    <div class="mt-8 flex items-center gap-2 text-green-500 text-xs font-bold uppercase tracking-widest">
                        Evolução Acelerada <span class="h-px w-8 bg-green-500/30"></span>
                    </div>
                </div>

                <div class="service-glow-card p-10 border-dashed border-green-500/30 flex flex-col justify-center items-center text-center group">
    <div class="text-4xl mb-4 group-hover:animate-bounce">🚀</div>
    <h3 class="text-xl font-black text-white mb-4 uppercase">Pronto para subir de nível?</h3>
    <a href="{{ url('/contato') }}" class="text-green-500 font-bold hover:underline tracking-widest text-xs uppercase">
        Fale com um Especialista ↗
    </a>
</div>
            </div>
        </div>
    </section>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection
