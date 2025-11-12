<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doa+ | Ajude a Mudar Vidas</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .hero-bg {
                background-image: url('https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80');
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen flex flex-col hero-bg">
            <div class="absolute inset-0 bg-black opacity-50 z-0"></div>

            <nav class="relative z-10 p-6 flex justify-between items-center max-w-7xl mx-auto w-full">
                <div class="text-white text-2xl font-bold">
                    Doa+
                </div>

                <div class="flex space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-white text-gray-800 font-semibold rounded-lg shadow hover:bg-gray-200 transition duration-300">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="px-4 py-2 bg-transparent text-white font-semibold rounded-lg hover:bg-white hover:text-gray-800 border border-white transition duration-300">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 bg-teal-500 text-white font-semibold rounded-lg shadow hover:bg-teal-600 transition duration-300">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>

            <main class="relative z-10 flex-grow flex items-center justify-center text-center text-white p-6">
                <div class="max-w-3xl">
                    <h1 class="text-5xl md:text-6xl font-extrabold leading-tight mb-4">
                        Ajude a Mudar Vidas
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-200 mb-8">
                        Sua doação faz a diferença na vida de quem mais precisa. Junte-se à nossa comunidade e espalhe o bem.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('register') }}" class="px-8 py-3 bg-teal-500 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-teal-600 transition duration-300 transform hover:scale-105">
                            Quero Doar Agora
                        </a>
                        <a href="#saiba-mais" class="px-8 py-3 bg-gray-700 text-white text-lg font-semibold rounded-lg shadow-lg hover:bg-gray-800 transition duration-300 transform hover:scale-105">
                            Saiba Mais
                        </a>
                    </div>
                </div>
            </main>
        </div>
        
        <section id="saiba-mais" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Como Funciona?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Nossa plataforma conecta doadores com instituições de caridade de forma transparente e eficiente. Você doa, nós garantimos que sua ajuda chegue ao destino certo.
                </p>
            </div>
        </section>

    </body>
</html>