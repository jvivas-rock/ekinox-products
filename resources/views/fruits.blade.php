@extends('layouts.app')

@section('content')
<div class="bg-hoja flex justify-between items-center shadow dark:bg-gray-800 py-4">
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
    <main class="w-7/8 bg-white h-screen overflow-y-scroll">
        <section class="flex justify-around items-center">
			<div class="flex">
				<div class="w-1/2 flex flex-col justify-center items-center m-2">
					<div>
						<img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/pineapple.png') }}">
					</div>
					<div class="justify-center">
						<h2 class="text-7xl font-general text-center font-normal uppercase">
							Piña
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
							<strong>Nombre Comercial: </strong>Piña tropical o ananás.
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>PROPIEDADES GENERALES:</strong>
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>Descripción: </strong>De fragancia muy singular, hermoso color y agradable sabor agridulce. Se come cruda o como ingrediente en zumos, conservas, licores, etc. El fruto y las hojas se usan en la preparación de compuestos medicinales.
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>Vida Útil: </strong>Condiciones de almacenamiento de 20°C y 85% de H.R. presenta un período de vida útil de 18 días.
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>Formas de Consumo: </strong>Se consume proncipalmente en conserva.
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>PROPIEDADES ESPECÍFICAS:</strong>
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>Nombre Científico: </strong>Ananas comosus.
						</p>
						<p>&nbsp;</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
						</p>
						<div>
							<table>
								<tbody>
									<tr>
										<td class="border border-black">Niacina 0,3 mg</td>
										<td class="border border-black">Fibra 1,2 g</td>
									</tr>
									<tr>
										<td class="border border-black">Agua 86,8 g</td>
										<td class="border border-black">Vitamina A1 3 mg</td>
									</tr>
									<tr>
										<td class="border border-black">Hidratos de carbono 13,9 g</td>
										<td class="border border-black">Vitamina B6 0,09 mg</td>
									</tr>
									<tr>
										<td class="border border-black">Proteínas 0,5 g</td>
										<td class="border border-black">Vitamina C 20 mg</td>
									</tr>
									<tr>
										<td class="border border-black">Zinc 0,15 mg</td>
										<td class="border border-black">Vitamina E 0,1 mg</td>
									</tr>
									<tr>
										<td class="border border-black">Potasio 250 mg</td>
										<td class="border border-black">Fósforo 11 mg</td>
									</tr>
									<tr>
										<td class="border border-black">Riboflavina 0,02 mg</td>
										<td class="border border-black">Tiamina 0,07 mg</td>
									</tr>
									<tr>
										<td class="border border-black">Hierro 0,5 mg</td>
										<td class="border border-black">Yodo 30 μg</td>
									</tr>
									<tr>
										<td class="border border-black">Calcio 12 mg</td>
										<td class="border border-black">Magnesio 14 mg</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>&nbsp;</p>
						<p class="text-sm font-sans font-normal text-gray-900 uppercase antialiased">
							<strong>Características organolépticas:</strong>
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							La piña aporta vitaminas C, A, E y de todo el complejo B, hay que resaltar que 150g de piña proporciona 80 mg de vitamina C, tiene un alto contenido en minerales. Es adecuado en dietas de control de peso por su bajo contenido en calorías, tiene propiedades diuréticas y depurativas por su alto nivel de potasio.
						</p>
						<p>&nbsp;</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							<strong>Caja de 12 KG: </strong>
						</p>
						<p class="text-sm font-sans font-normal text-gray-900 antialiased">
							Largo 398 - Ancho 292 - Alto 60
						</p>
					</div>
				</div>
			</div>
        </section>
		<hr class="m-2" />
        <section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/pitahaya-yellow.png') }}">
                </div>
                <div class="justify-center">
                    <h2 class="text-6xl font-general text-center font-normal uppercase">
                        Pitahaya Amarilla
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
                        <strong>Nombre Comercial: </strong>Pitahaya amarilla o fruta dragón.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>: De aroma intenso, pulpa muy refrescante y dulce, baja en calorías. Escasa de nutrientes, su aporte calórico se debe a los hidratos de carbono, La otra variedad, la roja, posee menos hidratos de carbono, pero mayor contenido en vitamica C.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Su vida útil a 20°C es de alrededor de 10 a 12 días.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Se consume la pulpa de la Pitahaya en ensaladas, así como en refrescos, mermeladas, jaleas o dulces.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>Se consume como fruta fresca, pero también por su atractivo color, la hace apropiada como adorno de múltiples postres y cocteles exóticos.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Selenicereus megalanthus.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 54</td>
                                    <td class="border border-black">Fibra 0,5 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 84,40%</td>
                                    <td class="border border-black">Vitamina C 8 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Hidratos de carbono 13,20 g</td>
                                    <td class="border border-black">Calcio 10 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 1,4 g</td>
                                    <td class="border border-black">Hierro 1,3 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Grasas totales 0,40 g</td>
                                    <td class="border border-black">Fósforo 26 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal uppercase text-gray-900 antialiased">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        La pitahaya amarilla está cubierta de una corteza con espinas que se retiran antes de comercializarlas, la roja carece de espinas, pero ambas tienen una pulpa de color blanco y está llena de semillas negras muy pequeñas que destacan por su efecto laxante.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 2,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 340 - Ancho 235 - Alto 90 - Test 200C 
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
        <section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/pitahaya-roja.png') }}">
                </div>
                <div class="justify-center">
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Pitahaya Roja
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
                        <strong>Nombre Comercial: </strong>Pitahaya roja o fruta dragón.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>: El fruto contiene Vitamina C y posee propiedades digestivas y desinflamatorias. Es recomendada para mejorar el sistema inmunológico y aumentar las defensas del cuerpo, así también ayuda en la formación de tejidos, huesos, glóbulos rojos y colágeno.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Su vida útil a 20°C es de alrededor de 10 a 12 días.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Se consume la pulpa de la Pitahaya en ensaladas, así como en refrescos, mermeladas, jaleas o dulces.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>Se consume como fruta fresca, pero también por su atractivo color, la hace apropiada como adorno de múltiples postres y cocteles exóticos.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Hylocereus undatus.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 54</td>
                                    <td class="border border-black">Fibra 0,5 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 84,40%</td>
                                    <td class="border border-black">Vitamina C 8 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Hidratos de carbono 13,20 g</td>
                                    <td class="border border-black">Calcio 10 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 1,4 g</td>
                                    <td class="border border-black">Hierro 1,3 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Grasas totales 0,40 g</td>
                                    <td class="border border-black">Fósforo 16 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        La pitahaya es un tesoro desde el punto de vista nutricional, contiene oxidantes, mucilagos, ácido ascórbico, fenoles. Es rica en vitamina C, también contiene vitaminas del grupo B, minerales de calcio, fósforo, hierro y tiene alto contenido de agua y posee proteína vegtal y fibra soluble.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 4,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 400 - Ancho 242 - Alto 138 - Test 250C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/mangostino-3.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Mangostino
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
                        <strong>Nombre Comercial: </strong>Mangostino, mangostán o jobo de la india
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Redonda de cáscara gruesa, dura y de color morado. La carta está recubierta internamente con una carne de color lila pálida o púrpura, la pulpa tierne 5 gajos de carne que son similares a una flor cerrada.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>No se debe colocar en lugares donde reciba directamente el sol, para que no se acelere su maduración. Preferible mantenerlo en lugares frescos y con sombra.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Desde que es cosechada la fruta ya puede ser consumida como fruta fresca, también puede prepararse en las ensaladas y batidos
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>Es una fruta muy utilizada para combatir la fiebre y dolores musculares, debemos buscar que no estén mallugados y que cedan ligeramente cuando los apretamos.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Garcinia mangostana.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 54</td>
                                    <td class="border border-black">Grasas 0,58 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Carbohidratos 17,91 g</td>
                                    <td class="border border-black">Fibra 1,8 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 80,69%</td>
                                    <td class="border border-black">Calcio 5,49 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 0,41 g</td>
                                    <td class="border border-black">Hierro 0,17 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Magnesio 13,9 mg</td>
                                    <td class="border border-black">Potasio 48 mg</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Fósforo 9,21 mg</td>
                                    <td class="border border-black">Vitamina C 7,2 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
						Es una fruta que ayuda a combatir los radicales libres y el envejecimiento celular, en su composición se han encontrado 84 tipos de xantonas, moléculas que combaten virus, hongos, bacterias y parásitos, esta fruta contiene vitamina B12 lo que hace que mejore el sistema nervioso y hepático.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 2,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 340 - Ancho 235 - Alto 90 - Test 200C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/tomate-arbol.jpg') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Tomate de Árbol
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
                        <strong>Nombre Comercial: </strong>Tomate de árbol, tomatillo o tomate andino.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong> Se cultiva en zonas tropicales, su color varía entere el rojo, amrillo y naranja. Es un fruto muy rico en vitaminas y minerales esenciales, especialmente la provitamina A, vitamina B6, C y E. Entre los minerales predominan el calcio, hierro, fósforo y magnesio.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Su vida útil a 18°C y 22°C y precipitaciones de 600 a 800 mm anuales. Es de alrededor de 10 a 12 días.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Se puede consumir la pulpa al natural ó en ensaladas, así como procesada en refrescos, mermeladas, jaleas o dulces
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>Se consume como fruta fresca, pero también para preparar postres y mermeladas.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Hylocereus undatus.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Ácido ascórbico 25 mg</td>
                                    <td class="border border-black">Fibra 1,1 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 85,84%</td>
                                    <td class="border border-black">Vitamina A 100 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Hidratos de carbono 10,03 g</td>
                                    <td class="border border-black">Calcio 6 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 1,7 g</td>
                                    <td class="border border-black">Hierro 0,4 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Grasas totales 0,1 g</td>
                                    <td class="border border-black">Fósforo 22 mg</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Niacina 1,1 mg</td>
                                    <td class="border border-black">Tiamina 0,05 mg</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Riboflavina 0,03 mg</td>
                                    <td class="border border-black"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        El tomate de árbol es fuente de betacarotenos, vitamina C, vitamina E y hierro. Presenta además contenidos altos de potasio, magnesio y fósforo, es un fruto ovoide con piel lisa y brillante. Su color varía desde el verde en estado inmaduro hasta amarillo, anaranjado, rojo, púrpura oscuro y jaspeado de diferentes matices en su madurez.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 2,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 340 - Ancho 235 - Alto 90 - Test 200C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/mango.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Mango
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
                        <strong>Nombre Comercial: </strong>Mango o melocotón de los trópicos.
                    </p>
					<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Variedades: </strong>Tommy Atkins, Haden, Kent,
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Mangos frescos, sanos y limpios de la especie Manguífera indicada para el mercado de consumo fresco.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>La vida útil del producto está en función a la madurez fisiológica del fruto y se tiene promedio de: 7-8° Brix: 30-50 días, de 8-9° Brix: 20-35 días.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>El producto es para consumo en el hogar, bien como fruta entera o en preparaciones caseras de jugos, mermeladas, etc. Y está destinada al público en general.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>El mango es una fruta perfecta para consumir fresca y en trozos, porque de esta manera aprovechamos su sabor dulce y obtenemos la saciedad que su ingesta puede ofrecer, además de todos sus antioxidantes. Podemos incluirlo como postre o snack saludable.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Solanum betaceum.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 65</td>
                                    <td class="border border-black">Colesterol 0 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Carbohidratos 18 g</td>
                                    <td class="border border-black">Sodio 2 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Lípidos 0,26 g</td>
                                    <td class="border border-black">Potasio 157 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 0,5 g</td>
                                    <td class="border border-black">Vitamina A 38,90 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Producto refrigerado muy susceptible a los cambios de temperatura en las etapas de almacenamiento, distribución y comercialización. Debe conservarse a una temperatura de 9 a 10°C para las variedades Haden, Tommy y Kent.
					</p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/granadilla.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Granadilla
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
                        <strong>Nombre Comercial: </strong>Granadilla o Golden Passion Fruit.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>El fruto de la granadilla es de forma elíptica y de color amarillo-naranja cuando logra su maduración, su pulpa de color gris tiene un perfume aromático y está caracterizada por la presencia de pequeñas semillas negras, es el fruto más dulce entre los frutos de la pasión.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Dejar a temperatura ambiente para que se madure y su sabor se suavice y dulcifique, consumirse antes de 10 días o una vez madura puede guardarse en la nevera durante 1 semana.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Se consume como fruta fresca, se rompe la cáscara con los dedos y se come la pulpa con cuchara, también se obtiene una rica bebida o consumir en ensaladas.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>El extracto de la granadilla se utiliza para preparar helados, soufflés, salsa y yogurt.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Passiflora ligularis.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Energía 94 kcal</td>
                                    <td class="border border-black">Grasas 2,8 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Carbohidratos 17,3 g</td>
                                    <td class="border border-black">Fibra 10,9 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Calcio 10 mg</td>
                                    <td class="border border-black">Calcio 5,49 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 2,4 g</td>
                                    <td class="border border-black">Hierro 0,9 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Magnesio 29 mg</td>
                                    <td class="border border-black">Potasio 348 mg</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Fósforo 64 mg</td>
                                    <td class="border border-black">Vitamina C 20 mg</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Vitamina B6 0,06 g</td>
                                    <td class="border border-black">Acido fólico 20 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Posee una excelente fuente de sodio, calcio, fósforo, hierro y fibra, ayuda a proveer vitaminas esenciales para el cuerpo como la vitamina B1, B2, C y la provitamina A. El consumo de la granadilla se recomienda para la estabilización de los nervios ya que funciona como sedante o tranquilizante natural.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 2,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 380 - Ancho 280 - Alto 85 - Test 250C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/malanga.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Malanga
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
                        <strong>Nombre Comercial: </strong>Malanga o Taro.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Tubérculo originario de países tropicales y subtropicales, que cuenta con una cantidad importante de vitaminas.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Tubérculo de ciclo corto que se siembra y cosecha durante todo el año.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Tipo de Fruta: </strong>Contiene sustancias nutritivas, carbohidratos y proteínas. Posee grandes cantidades de fibra dietética que ayuda a regular y acelerar el proceso digestivo y a disminuir el colesterol en el cuerpo.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Empaque: </strong>Cajas de 36 lbs, 40 lbs, 50 lbs dependiendo del requerimiento del cliente.
					</p>
					<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Trazabilidad: </strong>Mediante el uso de etiqueta en fruta y paletas con código en finca, semana y día de empaque.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Xanthosoma Sagittifolium.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Humedad 6,66</td>
                                    <td class="border border-black">Calcio 8,86 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Cobre 9 mg</td>
                                    <td class="border border-black">Hierro 2,11 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Zinc 2,71 mg</td>
                                    <td class="border border-black">Potasio 137,6 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 6,4 g</td>
                                    <td class="border border-black">Magnesio 7,26 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Color marrón (a veces peluda), sabor más nudoso que recuerda a los frutos secos.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 16 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 510 - Ancho 338 - Alto 189
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/malanga-lila.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Malanga Lila
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
                        <strong>Nombre Comercial: </strong>Malanga o Taro.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Tubérculo originario de países tropicales y subtropicales, que cuenta con una cantidad importante de vitaminas.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Tubérculo de ciclo corto que se siembra y cosecha durante todo el año.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Tipo de Fruta: </strong>Contiene sustancias nutritivas, carbohidratos y proteínas. Posee grandes cantidades de fibra dietética que ayuda a regular y acelerar el proceso digestivo y a disminuir el colesterol en el cuerpo.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Empaque: </strong>Cajas de 36 lbs, 40 lbs, 50 lbs dependiendo del requerimiento del cliente.
					</p>
					<p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Trazabilidad: </strong>Mediante el uso de etiqueta en fruta y paletas con código en finca, semana y día de empaque.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Xanthosoma Sagittifolium.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Humedad 6,66</td>
                                    <td class="border border-black">Calcio 8,86 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Cobre 9 mg</td>
                                    <td class="border border-black">Hierro 2,11 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Zinc 2,71 mg</td>
                                    <td class="border border-black">Potasio 137,6 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 6,4 g</td>
                                    <td class="border border-black">Magnesio 7,26 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Color marrón (a veces peluda), sabor más nudoso que recuerda a los frutos secos.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 16 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 510 - Ancho 338 - Alto 189
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/lulo.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Naranjilla
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
                        <strong>Nombre Comercial: </strong>Naranjilla, coconilla, uva de monte, obando o nuquí.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Presenta hojas de gran tamaño, aterciopelados, cubiertos de pelos cortos de color púrpura de 30 a 45 cm de largo. Son de forma oblonga ovalada, con los bordes ondulados y con un pecíolo hasta 15 cm, con ángulos de inserción obtusos o agudos, para captar la luz que pasa a través del bosque.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Durante la maduración, pierde el color verde y gana tonalidades amarillo-naranja-rojo. Es climatérica, con buena acidez, sensible al daño por frío a temperaturas < 7°C y con baja vida útil postcosecha.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Normalmente puede consumirse fresco o en jugo, en ambos casos sus múltiples propiedades influyen positivamente en el organismo. 
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>Con materia prima en la fabricación de pulpas, bebidas como jugo, concentrados frutales y salsas; además de dulces procesados tanto de forma artesanal como industrial, tales como mermeladas, conservas y helados, también es notable su uso en postres frutales.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Solanum quitoense.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 30 kcal</td>
                                    <td class="border border-black">Vitamina B11 0,1 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 0,5 g</td>
                                    <td class="border border-black">Vitamina B3 1,7 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 111,7%</td>
                                    <td class="border border-black">Vitamina C 3,8 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Vitamina B1 0,1 mg</td>
                                    <td class="border border-black">Azúcares 4,5 g</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        El fruto, parecido al tomate, es ovoide, de 4 a cm de diámetro, con cáscara amarilla, anaranjada o parda, cubierta de pequeñas y finas espinas o "vellos". Internamente se divide en cuatro compartimientos separados por particiones membranosas, llenas de pulpa de color verdoso o amarillento y numerosas semillas pequeñas y blanquesinas.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 4,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 340 - Ancho 235 - Alto 90 - Test 200C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/uvillas.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Uvilla
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
                        <strong>Nombre Comercial: </strong>Uvilla, uva serrana o uchuva.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Está llena de beneficios nutricionales y es una de las frutas más populares en el Ecuador. Es rica en muchos de los nutrientes más importantes que necesita el cuerpo humano. Es una excelente fuente de vitamina C, que ayuda al sistema inmunitario, vitamina A, un poderoso antioxidante que previene la acumulación de radicales libres y ayuda a la piel, de fibra, imprescindible para la salud digestiva y minerales como calcio, fósforo y hierro. Además, tiene pocas calorías y es una bena alternativa para cuidar el peso corporal.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: Las uvillas pueden tardar de tres a cinco días en madurar si lo almacenas a una temperatura ambiente. Sin embargo, al madurar, ya se puede refrigerar.</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>Los usos de la uvilla no tienen límite. Queda bien al prepararla en batidos, helados, vinagretas para ensaladas o carnes, cocteles y todo tipo de postres. Un zumo de uvilla al empezar el día es ideal para llenar el cuerpo de nutrientes y darle energía. También las puede comer al natural.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Physalis peruvina.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Humedad 81,26%</td>
                                    <td class="border border-black">Polifenoles totales 0,56 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Vitamina C 100 g</td>
                                    <td class="border border-black">Carotenoides totales 478,95 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Azúcares totales 12,26</td>
                                    <td class="border border-black">Ácido cítrico 8,96</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Cenizas 1,00%</td>
                                    <td class="border border-black">Calcio 56 g</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Magnesio 2005 g</td>
                                    <td class="border border-black">Potasio 4366 mg</td>
                                </tr>
								<tr>
                                    <td class="border border-black">Fósforo 581 g</td>
                                    <td class="border border-black">Sodio 26 g</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        La uvilla es una especie vegetal nativa de los Andes, crece entre 1000 a 3000m de altitud. Es perenne, herbácea, arbustiva y fuertemente ramificada, no climatérica, que se debe consumir cuando el capuchón se haya secado y el fruto se desprenda de la planta espontáneamente.
					</p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/platano-verde.jpg') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Plátano Verde
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
                        <strong>Nombre Comercial: </strong>Plátano verde o plátano.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>El plátano verde pertenece a la misma familia botánica que el banano común, las musáceas, son de origen asiático y se cultiva en regiones tanto tropicales como subtropicales de América.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>El plátano durará según a la temperatura en que se encuentre, esto se debe a que es una fruta que está acostumbrada a las temperaturas del trópico y soporta el frío. En la nevera el plátano dura alrededor de 2-9 días y en el congelador 1-2 meses, aunque no es recomendable.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong> Se puede consumir como tortillas, bolones de igual forma como snacks.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong> Aporta energía a nuestro organismo rápidamente, por lo que es una fruta excelente para niños y deportistas o para casos de agotamiento, fatiga crónica y fibromialgia.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Musa paradisiaca.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 100</td>
                                    <td class="border border-black">Hidratos de carbono 22,8 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 1,3 g</td>
                                    <td class="border border-black">Fibra 4,9 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 73,8%</td>
                                    <td class="border border-black">Calcio 9 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Hierro 0,6 mg</td>
                                    <td class="border border-black">Grasas 0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Tiene forma oblonga, alargada y algo curvada. Tamaño y peso: los plátanos pueden llegar a pesar unos 200 gramos o más cada unidad. Posee una longitud mínima de 14,0 cm y un grosor mínimo de 2,7 cm. El plátano tiene sabor dulce y perfumado.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 23 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 500 - Ancho 395 - Alto 231 - Test 250C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/maracuya.png') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Maracuyá
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
                        <strong>Nombre Comercial: </strong>Maracuyá, parcha, parchita y chinola.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Es un fruto aromático que presenta una cáscara dura, lisa, que al madurar se torna rugosa. Su forma es redonda u ovalada y en su interior está llena de una pulpa viscosa de color amarillo con abundantes semillas pequeñas de color negro. Su sabor es dulce y levemente ácido. Mide entre 4 y 10 cms de diámento.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Soporta hasta 20 días en perfecto estado, después de ese tiempo, su corteza empieza a presentar daños o deshidratación por frío, aunque la pulpa mantiene óptimas condiciones.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>El maracuyá se consume crudo, sin necesidad de cocinarlo o de retirar las semillas, es decir, puede consumirse directamente la fruta, una vez abierta.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong>Se utiliza en ensaladas de frutas, mermeladas, exquisitos batidos, zumos y postres.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Passiflora edulis.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 78</td>
                                    <td class="border border-black">Hierro 0,3 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 0,8 g</td>
                                    <td class="border border-black">Vitamina A 664 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Fibra 0,2 g</td>
                                    <td class="border border-black">Riboflavina 0,1 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Fósforo 18 g</td>
                                    <td class="border border-black">Niacina 2,24 mg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        El maracuyá puede mostrar hojas no lobuladas al inicio de su crecimiento y posteriormente hojas trilobuladas. Como es usual en las enredaderas, las raíces son superficiales.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 2,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 340 - Ancho 235 - Alto 90 - Test 200C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/pepino-dulce.jpg') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Pepino Dulce
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
                        <strong>Nombre Comercial: </strong>Pepino dulce o pera-melón
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>Es una especie originaria del área andina, donde se cultiva hace varios miles de años. Sin embargo, a pesar de sus buenas cualidades productivas, ha sido un cultivo que no se ha extendido al resto del mundo. No ha sido hasta hace pocos años cuando ha renacido el interés por este cultivo y se han iniciado intentos para introducirlo en diversos países.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong>Los frutos del pepino dulce se conservan bien durante más de 15 días a temperatura ambiente si están libres de golpes o daños en la piel. Si descendemos la temperatura de conservación a 5° se puede alargar este período a más de 70 días aunque en todos los casos hay que tener en cuenta la variabilidad que existe entre cultivares.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong>El fruto de pepino dulce es una baya que se puede consumir como fruta refrescante o en ensaladas, dependiendo de la variedad o del estado de madurez del fruto.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Usos: </strong> Es posible su consumo en zumos o en postres y platos más elaborados. El fruto tiene un buen sabor y un gran aroma.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Solanum muricatum Aiton.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Calorías 26</td>
                                    <td class="border border-black">Potasio 117 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 0,30 g</td>
                                    <td class="border border-black">Fósforo 10 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Agua 92,30%</td>
                                    <td class="border border-black">Calcio 30 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Fibra 0,5 g</td>
                                    <td class="border border-black">Carbohidratos 7 g</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Los frutos deben tener forma ovijal o redondeada, con diámentro de 6 a 8 cms, largo de 10 a 15 cms y peso entre 100 a 200 g. El fruto debe presentar una epidermis o piel amarillenta con estrías moradas o púrpuras, sin manchas de otro tipo.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 2,5 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 340 - Ancho 235 - Alto 90 - Test 200C
                    </p>
                </div>
            </div>
        </section>
		<hr class="m-2" />
		<section class="flex items-center m-4">
            <div class="w-1/2 flex flex-col justify-center items-center m-2">
                <div>
                    <img class="object-contain w-auto h-max m-auto" src="{{ asset('/img/aguacate.jpg') }}">
                </div>
                <div>
                    <h2 class="text-7xl font-general text-center font-normal uppercase">
                        Aguacate
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
                        <strong>Nombre Comercial: </strong>Aguacate o palta.
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES GENERALES:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Descripción: </strong>El aguacate es un fruto exótico cremoso que se obtiene del árbol tropical del mismo nombre. en algunas partes de América del Sur se conoce como Palta. Presenta unas dimensiones de 5-6 cms de longitud. El peso normal oscila entre 200-400 g.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Vida Útil: </strong> El aguacate verde puede durar de cuatro a cinco días en madurar si lo almacenas a una temperatura ambiente de unos 18°C. Al estar verde no se aconseja ponerlo en el refrigerador ya que no obtendrá la textura deseada posteriormente. Sin embargo, al madurar, ya se puede refrigerar.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Formas de Consumo: </strong> Se puede comer tanto como cocido, empleándose más como una hortaliza que como fruta. Carece de un sabor dulce o ácido característico, lo que me permite su combinación con muchos platos.
					</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES ESPECÍFICAS:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Nombre Científico: </strong>Persea americana.
                    </p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>PROPIEDADES FÍSICO-QUÍMICAS:</strong>
                    </p>
                    <div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="border border-black">Humedad 74,30%</td>
                                    <td class="border border-black">Carbohidratos 4,32%</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Proteínas 1,67 g</td>
                                    <td class="border border-black">Fibra 1,35 g</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Grasa 17,10</td>
                                    <td class="border border-black">Calcio 9 mg</td>
                                </tr>
                                <tr>
                                    <td class="border border-black">Cenizas 1,26%</td>
                                    <td class="border border-black"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased uppercase">
                        <strong>Características organolépticas:</strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        El fruto es una baya unisemillada, oval, de superficie lisa o rugosa. El envero se produce sólo en algunas variedades y la maduración del fruto sólo cuando éste se separa del árbol.
					</p>
                    <p>&nbsp;</p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        <strong>Caja de 4 KG: </strong>
                    </p>
                    <p class="text-sm font-sans font-normal text-gray-900 antialiased">
                        Largo 385 - Ancho 285 - Alto 120 - Test 500C
                    </p>
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
                    <p class="antialiased font-general font-extralight uppercase text-white mx-2 text-3xl">Contact Info: <strong>Víctor Pérez</strong></p>
                </div>
                <div>
                    <p class="antialiased font-general font-extralight text-white mx-2 text-3xl">General Manager</p>
                </div>
                <div>
                    <a href="mailto:vperez@ekinoxproducts.com" class="antialiased font-general font-extralight text-white mx-2 text-2xl hover:underline">vperez@ekinoxproducts.com</a>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <p class="antialiased font-general font-extralight text-white mx-2 text-3xl">+593 984605964</p>
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