<nav class="bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                </a>

                <!-- Admin Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('dashboard') }}"
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900">
                        Dashboard
                    </a>

                    <a href="{{ route('admin.messages') }}"
                       class="inline-flex items-center px-1 pt-1 text-sm font-medium text-gray-900">
                        Mensagens
                    </a>
                </div>
            </div>

            <!-- Right Side (opcional – texto fixo) -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <span class="text-sm text-gray-500">
                    Painel Administrativo
                </span>
            </div>

        </div>
    </div>
</nav>
