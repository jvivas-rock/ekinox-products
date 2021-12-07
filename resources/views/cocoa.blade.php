@extends('layouts.app')

@section('content')
<div class="bg-hoja flex justify-between items-center shadow dark:bg-gray-800 py-8">
    <div class="mx-3">
        <p>&nbsp;</p>
    </div>
    <div>
        <h2 class="antialiased font-extralight text-4xl font-general uppercase text-gray-100">Nuestros Productos</h2>
    </div>
    <div class="flex">
        <p>&nbsp;</p>
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
    <main class="container w-7/8 bg-white max-h-screen overflow-y-scroll">
        <section class="flex justify-around items-center m-2">
        	<div class="w-1/2 flex flex-col justify-center items-center m-2">
        		<div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/cacao-1.png') }}">
                </div>
                <div>
                	<h2 class="text-4xl font-general text-center font-normal uppercase">
                		Cacao en Grano
                	</h2>
                </div>
        	</div>
        	<div class="w-1/2 m-2">
            	<div class="flex justify-between">
                	<div>
                    	<p>&nbsp;</p>
                	</div>
                	<div>
                    	<img class="w-auto h-28 m-2" src="{{ asset('/img/LOGO-EKINOX.png') }}">
                	</div>
                	<div>
                    	<p>&nbsp;</p>
                	</div>
            	</div>
            	<div class="m-2">
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	El cacao o Theobroma cacao es una planta originaria de la Cuenca del amazonas, que crece en zonas húmedas.
                    </p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	Produce un fruto que se utiliza como ingrediente para alimentos entre los cuales se encuentran: el chocolate, licor de cacao, manteca de cacao, nibs, entre otros.
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	Ecuador es el mayor productor en el mundo del CACAO FINO DE AROMA y produce el 60% del mismo.
                	</p>
            	</div>
            </div>
        </section>
		<hr class="m-2" />
        <section class="flex items-center m-2">
        	<div class="w-1/3 flex flex-col justify-center items-center m-2">
        		<div>
                    <img class="object-contain w-200 h-max m-auto" src="{{ asset('/img/cacao-2.jpg') }}">
                </div>
        	</div>
        	<div class="w-2/3 flex flex-col justify-center items-center m-2">
        		<div>
        			<p class="text-sm font-sans font-normal text-gray-900 antialiased">
        				Nuestra empresa está clasificada como exportadora de frutas y cacao. Tenemos 18 meses en el mercado ecuatoriano manteniendo una oficina matriz en Quito, Ecuador y su oficina principal en el puerto de Guayaquil. Tenemos una capacidad de entrega de cacao mensual de 2 contenedores de 40 pies.
        			</p>
        			<p class="text-sm font-sans font-normal text-gray-900 antialiased">
        				Contamos con 3 variedades: Cacao CCN51, Arriba y Orgánico
        			</p>
        			<p class="text-sm font-sans font-normal text-gray-900 antialiased">
        				La variedad CCN51 se produce en el cantón Balzar, área que cuenta con las características climáticas ideales para su desarrollo. En los análisis del suelo y fruta no se han detectado presencia de cadmio ni otros metales pesados.
        			</p>
        			<p class="text-sm font-sans font-normal text-gray-900 antialiased">
        				La variedad Arriba, conocida también como Cacao Fino de Aroma es distintiva y emblemática del Ecuador y se distingue en por su aroma, sabor y textura. Es utilizado en chocolates refinados y gourmets.
        			</p>
        			<p class="text-sm font-sans font-normal text-gray-900 antialiased">
        				El Cacao Orgánico es un cultivo de origen natural responsable con el medio ambiente sin uso de pesticidas, cuenta con sus respectivas certificaciones otrorgadas por entidades competentes, mIsmas que lo avalan. 
        			</p>
        			<p class="text-sm font-sans font-normal text-gray-900 antialiased">
        				Debe ser perfectamente fermentado, sus características son: Color café por fuera con cascarilla de fácil desprendimientro, grano de color café con un gran olor a chocolate, aromático y agradable. son despacahados en lotes, acompañados de sus certificados.
        			</p>
        		</div>
        		<div class="overflow-hidden border-b border-gray-200 sm:rounded-lg mt-2">
        			<table class="min-w-full divide-y divide-gray-200 border-collapse bg-yellow-300">
        				<thead>
        					<tr>
        						<th class="border border-black">CARACTERÍSTICAS</th>
        						<th class="border border-black">CCN51</th>
        						<th class="border border-black">ARRIBA</th>
        						<th class="border border-black">ORGÁNICO</th>
        					</tr>
        				</thead>
        				<tbody>
        					<tr>
        						<td class="border border-black">Tipo</td>
        						<td class="border border-black">ASS</td>
        						<td class="border border-black">ASSS</td>
        						<td class="border border-black">OSS</td>
        					</tr>
        					<tr>
        						<td class="border border-black">Fermentación</td>
        						<td class="border border-black">65%</td>
        						<td class="border border-black">75%</td>
        						<td class="border border-black">75%</td>
        					</tr>
        					<tr>
        						<td class="border border-black">Humedad</td>
        						<td class="border border-black">7%</td>
        						<td class="border border-black">7%</td>
        						<td class="border border-black">7%</td>
        					</tr>
        					<tr>
        						<td class="border border-black">Impurezas</td>
        						<td class="border border-black">1%</td>
        						<td class="border border-black">1%</td>
        						<td class="border border-black">1%</td>
        					</tr>
        					<tr>
        						<td class="border border-black">Peso por cada 100</td>
        						<td class="border border-black">120-125 gr.</td>
        						<td class="border border-black">130 gr.</td>
        						<td class="border border-black"></td>
        					</tr>
        				</tbody>
        			</table>
        		</div>
        	</div>
        </section>
		<hr class="m-2" />
        <section class="flex items-center m-4">
        	<div class="w-1/2 flex flex-col justify-center items-center m-2">
        		<div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/cacao_nibs.png') }}">
                </div>
                <div>
                	<h2 class="text-4xl font-general text-center font-normal uppercase">
                		Nibs de Cacao
                	</h2>
                </div>
        	</div>
        	<div class="w-1/2 m-2">
            	<div class="flex justify-between">
                	<div>
                    	<p>&nbsp;</p>
                	</div>
                	<div>
                    	<img class="w-auto h-28 m-2" src="{{ asset('/img/LOGO-EKINOX.png') }}">
                	</div>
                	<div>
                    	<p>&nbsp;</p>
                	</div>
            	</div>
            	<div class="m-2">
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	Los <strong>NIBS</strong> son pequeños trozos de granos de cacao fragmentados, con sabor a chocolate.
                    </p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	Propiedades de los NIBS:
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	- Excelente fuente de fibra y grasas saludables.
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	- Su ingesta ayuda a promover la sensación de saciedad.
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	- Ricos en fósforo, magnesio y manganeso vitales para huesos sanos.
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	- Ricos en hierro, necesarios para la producción de globulos rojos.
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	- Son antioxidantes, reduciendo y estabiizando la presión arterial, previniendo paros cardíacos.
                	</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	<strong>Opciones de envío:</strong>
                	</p>
                	<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                    	- En cajas / bolsas de 20 o 25 KG.
            	</div>
            </div>
        </section>
    </main>
</div>
<footer class="bg-naranja dark:bg-gray-800 z-10">
    <div class="container px-6 py-4 mx-auto">
        <div class="flex justify-around">
            <div class="flex flex-col items-center">
            	<div>
                	<p class="antialiased uppercase font-general font-extralight text-white mx-2 text-3xl">Contact Info: <strong>Douglas Serrano</strong></p>
                </div>
                <div>
                	<p class="antialiased text-white font-general font-extralight mx-2 text-3xl">Sales & Marketing Director</p>
                </div>
                <div>
                	<a href="mailto:dserranom@ekinoxproducts.com" class="antialiased text-white font-general font-extralight mx-2 text-2xl hover:underline">dserranom@ekinoxproducts.com</a>
                </div>
            </div>
            <div class="flex flex-col items-center">
            	<div class="flex items-center">
                	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
  						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
					</svg>
                	<p class="antialiased font-general font-extralight text-white mx-2 text-3xl">+593 985584313</p>
                	<svg class="fill-current text-verde bg-white rounded-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                		<path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.398z"/>
                	</svg>
                </div>
                <div class="flex items-center">
                	<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
  						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
					</svg>
					<p class="antialiased font-general font-extralight text-white mx-2 text-3xl">+593 22373513</p>
                </div>
            </div>
        </div>

        <hr class="h-px my-6 bg-black border-none dark:bg-gray-700">

        <div>
            <p class="text-center text-white dark:text-white">© Ekinox Products 2022 - Todos los Derechos Reservados.</p>
        </div>
    </div>
</footer>
@endsection