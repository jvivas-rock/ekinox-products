@extends('layouts.app')

@section('content')
<div class="bg-hoja flex justify-between items-center shadow dark:bg-gray-800 py-8">
    <div class="mx-3">
        <p>&nbsp;</p>
    </div>
    <div>
        <h2 class="antialiased font-bold text-4xl text-hojita">&nbsp;</h2>
    </div>
    <div class="flex">
        <a class="flex-auto mx-3" href="">
            <img class="duration-300 transform hover:scale-125" src="{{ asset('/img/united-48x48-33115.png') }}">
        </a>
        <a class="flex-auto mx-3" href="">
            <img class="duration-300 transform hover:scale-125" src="{{ asset('/img/spain-48x48-33105.png') }}">
        </a>
    </div>
</div>
<div class="flex flex-no-wrap">
    <div class="float-left relative flex-col w-1/8">
        <div class="flex flex-col w-64 h-full px-2 py-8 bg-verde border-r dark:bg-gray-800 dark:border-gray-600">
            <div class="flex flex-col justify-between flex-1">
                <nav class="my-3">

                    <a class="flex items-center px-4 py-2 mt-20 text-2xl text-gray-100 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-naranja dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-900" href="{{ url('/') }}">
                        <span class="mx-auto text-center font-general font-light text-4xl uppercase">Home</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-32 text-2xl text-gray-100 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-naranja dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-900" href="{{ route('aboutus') }}">
                        <span class="mx-auto text-center font-general font-light text-4xl uppercase">¿Quiénes Somos?</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-32 text-2xl text-gray-100 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-naranja dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-900" href="{{ url('/products') }}">
                        <span class="mx-auto text-center font-general font-light text-4xl uppercase">Nuestros Productos</span>
                    </a>

                </nav>
            </div>
        </div>
    </div>
    <div class="container bg-white w-7/8">
        <section>
            <div class="flex m-2">
                <div>
                    <img class="w-full h-full m-2" src="{{ asset('/img/LOGO-EKINOX.png') }}">
                </div>
                <div class="flex flex-col mx-2 align-center max-h-auto items-center justify-between">
                    <div class="mb-14">
                        <a href="{{ url('/products/cocoa') }}" class="flex flex-col items-center justify-center w-full max-w-lg mx-auto my-4">
                            <img class="object-cover w-80 duration-300 transform hover:scale-125" src="{{ asset('/img/cacao-main.jpg') }}">
                            <h4 class="mt-3 text-lg font-medium text-gray-700 dark:text-gray-200">Cacao</h4>
                            <p class="text-gray-700">Cocoa</p>
                        </a>
                    </div>
                    <div>
                        <p>&nbsp;</p>
                    </div>
                    <div class="mt-20">
                        <a href="{{ url('/products/fruits') }}" class="mt-10 flex flex-col items-center justify-center w-full max-w-lg mx-auto my-4">
                            <img class="object-cover w-80 duration-300 transform hover:scale-125" src="{{ asset('/img/frutas.png') }}">
                            <h4 class="mt-3 text-lg font-medium text-gray-700 dark:text-gray-200">Frutas</h4>
                            <p class="text-gray-700">Fruits</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<footer class="bg-naranja dark:bg-gray-800 z-10">
    <div class="container px-6 py-4 mx-auto">
        <div class="flex justify-around">
            <div class="flex items-center">
                <svg class="fill-current text-verde bg-white rounded-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/>
                </svg>
                <p class="antialiased font-bold text-white mx-2 text-xl">ekinoxproduct</p>
            </div>
            <div class="flex items-center">
                <svg class="fill-current text-verde bg-white rounded-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M14.829 6.302c-.738-.034-.96-.04-2.829-.04s-2.09.007-2.828.04c-1.899.087-2.783.986-2.87 2.87-.033.738-.041.959-.041 2.828s.008 2.09.041 2.829c.087 1.879.967 2.783 2.87 2.87.737.033.959.041 2.828.041 1.87 0 2.091-.007 2.829-.041 1.899-.086 2.782-.988 2.87-2.87.033-.738.04-.96.04-2.829s-.007-2.09-.04-2.828c-.088-1.883-.973-2.783-2.87-2.87zm-2.829 9.293c-1.985 0-3.595-1.609-3.595-3.595 0-1.985 1.61-3.594 3.595-3.594s3.595 1.609 3.595 3.594c0 1.985-1.61 3.595-3.595 3.595zm3.737-6.491c-.464 0-.84-.376-.84-.84 0-.464.376-.84.84-.84.464 0 .84.376.84.84 0 .463-.376.84-.84.84zm-1.404 2.896c0 1.289-1.045 2.333-2.333 2.333s-2.333-1.044-2.333-2.333c0-1.289 1.045-2.333 2.333-2.333s2.333 1.044 2.333 2.333zm-2.333-12c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.958 14.886c-.115 2.545-1.532 3.955-4.071 4.072-.747.034-.986.042-2.887.042s-2.139-.008-2.886-.042c-2.544-.117-3.955-1.529-4.072-4.072-.034-.746-.042-.985-.042-2.886 0-1.901.008-2.139.042-2.886.117-2.544 1.529-3.955 4.072-4.071.747-.035.985-.043 2.886-.043s2.14.008 2.887.043c2.545.117 3.957 1.532 4.071 4.071.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886z"/></svg>
                <p class="antialiased font-bold text-white mx-2 text-xl">@ekinoxproduct</p>
            </div>
        </div>

        <hr class="h-px my-6 bg-black border-none dark:bg-gray-700">

        <div>
            <p class="text-center text-white dark:text-white">© Ekinox Products 2022 - Todos los Derechos Reservados.</p>
        </div>
    </div>
</footer>
@endsection