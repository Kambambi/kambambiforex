@extends('layouts.public')

@section('content')
<style>
    .social-card {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }
    .social-card:hover {
        border-color: #22c55e;
        background: rgba(34, 197, 94, 0.05);
        transform: translateY(-5px);
    }
</style>

<div class="bg-black min-h-screen pt-40 pb-20">
    <div class="container mx-auto px-6 text-center">

        <h2 class="text-5xl md:text-7xl font-black text-white mb-6 uppercase tracking-tighter">
            FALE <span class="text-green-500">CONNOSCO</span>
        </h2>

        <p class="text-gray-400 mb-16 uppercase tracking-widest text-sm">
            Escolha a plataforma de sua preferência para atendimento imediato.
        </p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">

            <a href="https://wa.me/244936461548" target="_blank" class="social-card p-8 rounded-3xl flex flex-col items-center">
                <span class="text-4xl mb-4 text-green-500"><i class="fab fa-whatsapp"></i></span>
                <span class="text-white font-bold uppercase tracking-widest">WhatsApp Principal</span>
                <span class="text-gray-500 text-xs mt-2">+244 936 461 548</span>
            </a>

            <a href="https://www.instagram.com/kambambiforex" target="_blank" class="social-card p-8 rounded-3xl flex flex-col items-center">
                <span class="text-4xl mb-4 text-pink-500"><i class="fab fa-instagram"></i></span>
                <span class="text-white font-bold uppercase tracking-widest">Instagram</span>
            </a>

            <a href="https://www.youtube.com/@kambambiforex" target="_blank" class="social-card p-8 rounded-3xl flex flex-col items-center">
                <span class="text-4xl mb-4 text-red-600"><i class="fab fa-youtube"></i></span>
                <span class="text-white font-bold uppercase tracking-widest">YouTube Academy</span>
            </a>

            <a href="https://www.facebook.com/share/17vSGJ7QKr/?mibextid=wwXIfr" target="_blank" class="social-card p-8 rounded-3xl flex flex-col items-center">
                <span class="text-4xl mb-4 text-blue-600"><i class="fab fa-facebook-f"></i></span>
                <span class="text-white font-bold uppercase tracking-widest">Facebook</span>
            </a>

            <a href="mailto:kambambiforex@gmail.com" class="social-card p-8 rounded-3xl flex flex-col items-center">
                <span class="text-4xl mb-4 text-gray-400"><i class="fas fa-envelope"></i></span>
                <span class="text-white font-bold uppercase tracking-widest">Enviar E-mail</span>
            </a>

            <a href="https://www.tiktok.com/@kambambiforex" target="_blank" class="social-card p-8 rounded-3xl flex flex-col items-center">
                <span class="text-4xl mb-4 text-white"><i class="fab fa-tiktok"></i></span>
                <span class="text-white font-bold uppercase tracking-widest">TikTok</span>
            </a>
        </div>

        <div class="mt-20 p-8 border border-green-500/20 rounded-2xl max-w-2xl mx-auto">
            <p class="text-gray-400 italic text-sm uppercase tracking-widest font-mono">
                "Aqui a transparência é o nosso maior ativo. Clique em qualquer link acima para falar diretamente com a nossa equipa."
            </p>
        </div>

    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection
