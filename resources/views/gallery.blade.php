@extends('layouts.public')

@section('content')
<style>
    .gallery-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 20px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .gallery-card:hover {
        border-color: #22c55e;
        transform: translateY(-5px);
    }
    /* Tamanho controlado para os vídeos */
    .video-container {
        width: 100%;
        aspect-ratio: 16/9;
        background: #000;
    }
    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .img-fluid {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .gallery-card:hover .img-fluid {
        transform: scale(1.1);
    }
    .category-tag {
        position: absolute;
        top: 10px;
        right: 10px;
        background: rgba(34, 197, 94, 0.8);
        color: black;
        padding: 2px 8px;
        border-radius: 6px;
        font-size: 9px;
        font-weight: bold;
        z-index: 10;
    }
</style>

<div class="bg-black min-h-screen pb-20">

    <section class="relative pt-32 pb-12 overflow-hidden text-center">
        <div class="container mx-auto px-6 relative z-10">
            <h2 class="text-5xl md:text-7xl font-black text-white mb-4 uppercase tracking-tighter">
                NOSSA <span class="text-green-500">JORNADA</span>
            </h2>
            <p class="text-gray-500 uppercase tracking-widest text-xs">Conteúdo Educacional e Resultados Reais</p>
        </div>
    </section>

    <div class="container mx-auto px-6">

        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <span class="text-2xl">🎥</span>
                <h3 class="text-white text-xl font-bold uppercase tracking-widest">Vídeos Educacionais</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <div class="gallery-card relative">
                    <div class="category-tag">MINDSET</div>
                    <div class="video-container">
                        <video controls>
                            <source src="{{ asset('videos/WhatsApp Video 2026-01-17 at 12.59.50.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="gallery-card relative">
                    <div class="category-tag">MINDSET</div>
                    <div class="video-container">
                        <video controls>
                            <source src="{{ asset('videos/WhatsApp Video 2026-01-17 at 12.59.53.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="gallery-card relative">
                    <div class="category-tag">AULA</div>
                    <div class="video-container">
                        <video controls>
                            <source src="{{ asset('videos/WhatsApp Video 2026-01-17 at 13.13.28.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="gallery-card relative">
                    <div class="category-tag">LIVE</div>
                    <div class="video-container">
                        <video controls>
                            <source src="{{ asset('videos/WhatsApp Video 2026-01-17 at 13.14.13.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <span class="text-2xl">📸</span>
                <h3 class="text-white text-xl font-bold uppercase tracking-widest">Momentos KambambiFOREX</h3>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="gallery-card aspect-square">
                    <img src="{{ asset('images/WhatsApp Image 2026-01-17 at 13.14.49.jpeg') }}" class="img-fluid" alt="KambambiForex">
                </div>
                <div class="gallery-card aspect-square">
                    <img src="{{ asset('images/WhatsApp Image 2026-01-17 at 13.14.48.jpeg') }}" class="img-fluid" alt="KambambiForex">
                </div>
                <div class="gallery-card aspect-square">
                    <img src="{{ asset('images/WhatsApp Image 2026-01-17 at 13.14.48 (1).jpeg') }}" class="img-fluid" alt="KambambiForex">
                </div>
                <div class="gallery-card aspect-square">
                    <img src="{{ asset('images/WhatsApp Image 2026-01-17 at 13.14.47.jpeg') }}" class="img-fluid" alt="KambambiForex">
                </div>
            </div>
        </div>

        <div class="mb-20">
            <div class="flex items-center gap-4 mb-8 border-b border-white/5 pb-4">
                <span class="text-2xl">📊</span>
                <h3 class="text-white text-xl font-bold uppercase tracking-widest">Análises de Mercado</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <div class="gallery-card flex flex-col md:flex-row p-4 gap-6 items-center">
                    <div class="w-full md:w-48 h-32 overflow-hidden rounded-lg">
                         <img src="{{ asset('images/WhatsApp Image 2026-01-17 at 13.00.02.jpeg') }}" class="img-fluid" alt="XAUUSD">
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-bold uppercase tracking-tighter">Estudo Volatility 10(1s) Index Deriv</h4>
                        <p class="text-gray-500 text-xs mt-2">Risco Restorno de 1:12.</p>
                    </div>
                </div>
                <div class="gallery-card flex flex-col md:flex-row p-4 gap-6 items-center">
                    <div class="w-full md:w-48 h-32 overflow-hidden rounded-lg">
                         <img src="{{ asset('images/WhatsApp Image 2026-01-17 at 13.00.01.jpeg') }}" class="img-fluid" alt="EURUSD">
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-bold uppercase tracking-tighter">Resultado Setup Perfeito Mentalidade Perfeita</h4>
                        <p class="text-gray-500 text-xs mt-2">ICC + Smart Money</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
