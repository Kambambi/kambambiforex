<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KambambiForex - Admin</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Mantenha o Vite para quando estiver no Render --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="font-sans antialiased bg-black text-white"> {{-- Alterado para fundo preto --}}
        <div class="min-h-screen bg-black"> {{-- Alterado para combinar com o seu design --}}

            {{-- Navegação --}}
            @include('layouts.navigation')

            @isset($header)
                <header class="bg-gray-900 shadow border-b border-green-500/20">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <main>
                @yield('content')
                {{-- Caso esteja a usar componentes x-slot: --}}
                {{ $slot ?? '' }}
            </main>
        </div>
    </body>
</html>
