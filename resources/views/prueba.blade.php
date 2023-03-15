<?php

    class Empleado {
        public string $name;
        public string $last_name;
        public int $age;
        public string $section;

        public function __construct( string $nombre, string $apellido, int $edad, string $seccion )
        {
            $this->name = $nombre;
            $this->last_name = $apellido;
            $this->age = $edad;
            $this->section = $seccion;
        }
    }

    $empleado = new Empleado("Juan", "Pérez", 32, "Contabilidad");

    echo "<pre>";
        var_dump($empleado);
        //dd($empleado);
    echo "</pre>";

    echo "<pre>";
        var_dump($empleado->name);
    echo "</pre>";


?>
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

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100
        dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400
                        dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Home
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400
                        dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400
                               dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                    Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
            <p>Esta es una página de prueba</p>
            <p>La situación se complica</p>





        </div>
    </body>
</html>
