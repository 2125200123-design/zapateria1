@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Clientes
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de clientes registrados
        </p>
    </div>

<div class="p-5">

    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-800 text-white">

                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Imagen</th>
                    <th class="p-4 text-left">Nombre</th>
                    <th class="p-4 text-left">Correo</th>
                    <th class="p-4 text-left">RFC</th>
                    <th class="p-4 text-left">Teléfono</th>
                    <th class="p-4 text-left">Dirección</th>
                    <th class="p-4 text-left">Edad</th>
                    <th class="p-4 text-left">Estado</th>
                </tr>

            </thead>

            <tbody>


            </tbody>

        </table>

    </div>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

</div>

@endsection