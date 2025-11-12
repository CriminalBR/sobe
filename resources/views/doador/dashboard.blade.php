<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard do Doador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-800 border-l-4 border-green-500 rounded-lg shadow-md">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl mb-8">
                <div class="p-8 border-b border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">
                        {{ __("Bem-vindo, ") }} {{ Auth::user()->name }}!
                    </h3>
                    <p class="text-gray-600">
                        Obrigado por fazer parte da nossa comunidade. Cada doação conta.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <a href="{{ route('doador.doacoes.create') }}" 
                   class="group bg-gradient-to-r from-teal-500 to-cyan-600 text-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="flex items-center space-x-4">
                        <div class="bg-white bg-opacity-30 p-3 rounded-full">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-2xl font-semibold">{{ __('+ Adicionar Doação') }}</h4>
                            <p class="mt-1 text-teal-100">{{ __('Registrar uma nova doação que você fez.') }}</p>
                        </div>
                    </div>
                </a>
                
                <a href="{{ route('doador.historico') }}" 
                   class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-200">
                    <div class="flex items-center space-x-4">
                        <div class="bg-gray-100 p-3 rounded-full group-hover:bg-gray-200 transition-colors">
                            <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H7a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-2xl font-semibold text-gray-800">{{ __('Meu Histórico') }}</h4>
                            <p class="mt-1 text-gray-600">{{ __('Ver todas as suas doações registradas.') }}</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>