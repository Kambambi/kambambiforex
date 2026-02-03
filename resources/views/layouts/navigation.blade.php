<nav x-data="{ open: false }" class="bg-black border-b border-green-500/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-green-500" />
                </a>

                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('dashboard') }}"
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-green-500 transition">
                        Dashboard
                    </a>

                    <a href="{{ route('admin.messages') }}"
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white hover:text-green-500 transition">
                        Mensagens
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <span class="text-sm text-green-500 font-bold tracking-widest">
                    PAINEL ADMINISTRATIVO
                </span>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-green-500 hover:text-white hover:bg-green-600 transition">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         class="sm:hidden bg-black border-t border-green-500/10">

        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}"
               class="block ps-3 pe-4 py-2 border-l-4 border-green-500 text-base font-medium text-white bg-green-500/10">
                Dashboard
            </a>

            <a href="{{ url('/') }}"
               class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-green-500 hover:bg-gray-900">
                Ir para o Site (Home)
            </a>

            <a href="{{ route('calculator') }}"
               class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-green-500 hover:bg-gray-900">
                Calculadora
            </a>

            <a href="{{ route('admin.messages') }}"
               class="block ps-3 pe-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800 hover:border-green-500">
                Mensagens
            </a>
        </div>
    </div>
</nav>
