@extends('layouts.app')

@section('content')
<div class="bg-hoja flex justify-between items-center shadow dark:bg-gray-800 py-8">
    <div class="mx-3">
        <p>&nbsp;</p>
    </div>
    <div>
        <h2 class="antialiased font-bold text-4xl uppercase text-gray-100">¿Quiénes Somos?</h2>
    </div>
    <div class="flex">
        <p>&nbsp;</p>
    </div>
</div>
<div class="flex flex-no-wrap">
    <div class="float-left relative flex-col width-1/5">
        <div class="flex flex-col w-64 h-full px-4 py-8 bg-verde border-r dark:bg-gray-800 dark:border-gray-600">
        
            <div class="flex flex-col justify-between flex-1">
                <nav class="my-3">

                    <a class="flex items-center px-4 py-2 mt-20 text-2xl text-gray-100 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-naranja dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-900" href="{{ url('/') }}">
                        <span class="mx-2 font-medium uppercase">Home</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-32 text-2xl text-gray-100 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-naranja dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-900" href="{{ route('aboutus') }}">
                        <span class="mx-2 font-medium uppercase">¿Quiénes Somos?</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-32 text-2xl text-gray-100 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-naranja dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-900" href="{{ url('/products') }}">
                        <span class="mx-2 font-medium uppercase">Nuestros Productos</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
    <div class="container width-4/5 m-2">
        <section>
            <div class="flex justify-between">
                <div>
                    <p>&nbsp;</p>
                </div>
                <div>
                    <img class="w-full h-48 m-2" src="{{ asset('/img/LOGO-EKINOX.png') }}">
                </div>
                <div>
                    <p>&nbsp;</p>
                </div>
            </div>
            <div class="m-2">
                <p class="my-4 text-xl text-gray-900 antialiased">
                    Somos una empresa dedicada a la exportación de los mejores productos agrícolas ecuatorianos como son: Cacao en Grano y Frutas.
                </p>
                <p class="my-4 text-xl text-gray-900 antialiased">
                    Estamos comprometidos a elevar el nivel de vida de nuestros proveedores mejorando sus ingresos y prácticas agrícolas para juntos avanzar hacia un sector agrícola sostenible.
                </p>
                <p class="my-4 text-xl text-gray-900 antialiased">
                    Nuestro servicio está orientado al cliente con la garantía de asegurarnos que el producto sea enviado en el momento correcto, en cantidades exactas hacia el destino acordado.
                </p>
                <p class="my-4 text-xl text-gray-900 antialiased">
                    Nuestros productos de alta calidad se encuentran enmarcados en la normativa europea. 
                </p>
            </div>
            <div class="flex justify-evenly m-2">
                <div>
                    <img class="w-80 h-48 m-2 rounded-lg" src="{{ asset('/img/plantacion-cacao.png') }}">
                </div>
                <div>
                    <p>&nbsp;</p>
                </div>
                <div>
                    <img class="w-80 h-48 m-2 rounded-lg" src="{{ asset('/img/ekinox-banano.jpg') }}">
                </div>
            </div>
        </section>
    </div>
</div>
<footer class="bg-naranja h-18 dark:bg-gray-800 z-10">
    <div class="container px-6 py-8 mx-auto">

    </div>
</footer>
@endsection