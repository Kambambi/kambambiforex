@extends('layouts.public')

@section('content')
<style>
    .input-field {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: white;
        transition: all 0.3s ease;
    }
    .input-field:focus {
        border-color: #22c55e;
        background: rgba(34, 211, 94, 0.05);
        outline: none;
        box-shadow: 0 0 15px rgba(34, 211, 94, 0.1);
    }
    .contact-card {
        background: rgba(255, 255, 255, 0.02);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 24px;
    }
    .social-btn {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
        font-size: 1.2rem;
        color: #94a3b8;
    }
    .social-btn:hover {
        transform: translateY(-5px);
        color: white;
        border-color: #22c55e;
    }
    .fb:hover { background: #1877F2; }
    .ig:hover { background: linear-gradient(45deg, #f58529, #dd2a7b, #8134af); }
    .yt:hover { background: #FF0000; }
    .tk:hover { background: #000000; border-color: #ff0050; }
    .xx:hover { background: #000000; }
    .li:hover { background: #0A66C2; }
    .wa:hover { background: #25D366; color: black; }
</style>

<div class="bg-black min-h-screen pb-20">

    <section class="relative pt-40 pb-16 overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-green-500/5 blur-[120px] rounded-full"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-6xl md:text-8xl font-black text-white mb-6 tracking-tighter uppercase">
                ESTAMOS <span class="text-green-500">AQUI</span>
            </h2>
            <p class="max-w-2xl mx-auto text-gray-400 text-lg uppercase tracking-[3px]">
                Prontos para orientar a sua jornada no mercado financeiro global.
            </p>
        </div>
    </section>

    <section class="py-10">
        <div class="container mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-start">

                <div class="contact-card p-8 md:p-12">
                    <h3 class="text-2xl font-black text-white mb-8 uppercase tracking-tighter">Enviar Mensagem</h3>

                    <form method="POST" action="{{ route('contact.send') }}" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="Seu nome" required
                                   class="input-field w-full p-4 rounded-xl text-sm">

                            <input type="text" name="whatsapp" placeholder="Seu WhatsApp (ex: +244...)" required
                                   class="input-field w-full p-4 rounded-xl text-sm">
                        </div>

                        <textarea name="message" rows="5" placeholder="Sua mensagem" required
                                  class="input-field w-full p-4 rounded-xl text-sm"></textarea>

                        <button type="submit" class="w-full py-4 bg-green-500 text-black font-black rounded-xl hover:scale-[1.02] transition-all shadow-[0_0_20px_rgba(34,197,94,0.2)] uppercase tracking-widest text-sm">
                            Enviar para a KambambiForex
                        </button>
                    </form>
                </div>

                <div class="space-y-10">
                    <div>
                        <h3 class="text-green-500 font-bold uppercase tracking-[4px] text-xs mb-6">Contactos Diretos</h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4 group">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-green-500 border border-white/10 group-hover:bg-green-500 group-hover:text-black transition-all">📞</div>
                                <span class="text-xl text-white font-light tracking-widest font-mono italic">936 461 548 / 945 724 429</span>
                            </div>
                            <div class="flex items-center gap-4 group">
                                <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-green-500 border border-white/10 group-hover:bg-green-500 group-hover:text-black transition-all font-mono">📧</div>
                                <a href="mailto:kambabiforex@gmail.com" class="text-xl text-white font-light tracking-widest hover:text-green-500 transition-colors">kambambiforex@gmail.com</a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-green-500 font-bold uppercase tracking-[4px] text-xs mb-6 text-gradient font-mono">Conecte-se Conosco</h3>
                        <div class="flex flex-wrap gap-4">
                            <a href="https://www.facebook.com/share/1NGKEngoQJ/?mibextid=wwXIfr" target="_blank" class="social-btn fb" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/kambambiforex?igsh=MTZ2dzF2NGt6enRoaA%3D%3D&utm_source=qr" target="_blank" class="social-btn ig" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/@kambambiforex" target="_blank" class="social-btn yt" aria-label="YouTube">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.tiktok.com/@kambambiforex?_r=1&_t=ZM-938R6puMgKS" target="_blank" class="social-btn tk" aria-label="TikTok">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://x.com/kambambi126756?s=21" target="_blank" class="social-btn xx" aria-label="X">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/am%C3%A9rico-kambambi-55006b356?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" target="_blank" class="social-btn li" aria-label="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://wa.me/244936461548" target="_blank" class="social-btn wa" aria-label="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>

                    <div class="p-6 border-l-2 border-green-500 bg-white/5 rounded-r-2xl">
                        <p class="text-gray-400 text-sm italic uppercase tracking-widest font-mono">
                            "O nosso suporte não é apenas técnico, é estratégico. Respondemos a cada trader com o foco na sua consistência."
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
@endsection
