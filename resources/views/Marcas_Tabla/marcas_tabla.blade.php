@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Marcas
        </h1>

        <p class="text-gray-500 mt-2">
            VisualizaciÃ³n de marcas registradas
        </p>
    </div>

<div class="p-5">

    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-gray-800 text-white">

                <tr>
                    <th class="p-4 text-left">ID</th>
                    <th class="p-4 text-left">Marca</th>
                </tr>

            </thead>

            <tbody>

                @foreach ($marcas as $marca)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="p-4">{{ $marca->marca_id }}</td>
                        <td class="p-4">{{ $marca->marca }}</td>
                    </tr>
                @endforeach

            </tbody>

        </table>

    </div>

            <a href="/Marcas"
                class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
                Nueva marca
            </a>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

</div>


@endsection