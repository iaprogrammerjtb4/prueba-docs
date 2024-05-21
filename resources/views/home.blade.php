<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <!--<body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->
<body class="bg-gray-100 h-screen antialiased leading-none dark:bg-gray-900">
    <div class="flex justify-between items-center p-6 bg-dark-900 text-white shadow-md ">
        <div class="text-lg font-figtree">
        <div class="card-body">
            <h4>Bienvenido, {{ auth()->user()->name }}</h4>
            <p>Correo: {{ auth()->user()->email }}</p>
        </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            <button>Salir</button>
            @csrf
        </form>
    </div>

    <div class="container mx-auto p-6">
        <div class="flex justify-center items-center p-5">
            <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('storage/img/isotipo.jpeg') }}" class="w-full" alt="Isotipo">
                <div class="px-6 py-4 text-center">
                    <div class="font-bold text-xl mb-2">DOCS-JATB</div>
                    <p class="text-center">GESTOR DE ARCHIVOS</p>
                </div>
            </div>
        </div>
        <div class="font-bold text-xl mb-2 text-center text-white">MODULOS</div>
        <div class="flex flex-wrap gap-6 sm:grid sm:grid-cols-3">
            <a href="/doc_documento"><div class="w-full  p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Documentos</h2>
                <p class="text-gray-600">Visualiza, Agrega, edita, borra documentos</p>
            </div></a>
            <a href="/pro_proceso"><div class="w-full  p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Procesos</h2>
                <p class="text-gray-600">Visualiza, Agrega, edita, borra procesos</p>
            </div></a>
            <a href="/tip_tipo_doc"><div class="w-full  p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-2 text-indigo-600">Tipos Documentos</h2>
                <p class="text-gray-600">Visualiza, Agrega, edita, borra tipos de documento</p>
            </div></a>
        </div>
    </div>
</body>
</html>
