@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 py-10">
    <div class="max-w-7xl mx-auto px-4">

        <div class="bg-white rounded-2xl shadow-2xl p-8">
            <h1 class="text-3xl font-extrabold text-gray-800 mb-2">
                🚀 Dashboard do Administrador
            </h1>

           <p class="text-gray-500 mb-6">
    Bem-vindo ao painel administrativo da <span class="font-semibold">KambambiForex</span>
</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-indigo-500 text-white rounded-xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold">👤 Utilizadores</h2>
                    <p class="text-3xl mt-4">1</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-purple-500 text-white rounded-xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold">📷 Imagens</h2>
                    <p class="text-3xl mt-4">0</p>
                </div>

                <!-- Card 3 -->
                <div class="bg-pink-500 text-white rounded-xl p-6 shadow-lg">
                    <h2 class="text-xl font-bold">🎥 Vídeos</h2>
                    <p class="text-3xl mt-4">0</p>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
