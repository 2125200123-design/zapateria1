@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Colores
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

        @if(isset($colores))
            <form action="/colores/actualizar/{{ $colores->color_id }}" method="POST">
        @else
            <form action="/colores/guardar" method="POST">
        @endif

        @csrf

        <div class="grid grid-cols-1 gap-6">

            <div>
                <label class="font-semibold">Color</label>

                <select
                    name="color"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar color
                    </option>

                    <option>Negro</option>
                    <option>Blanco</option>
                    <option>Rojo</option>
                    <option>Azul</option>
                    <option>Verde</option>
                    <option>Gris</option>
                    <option>Café</option>
                    <option>Rosa</option>

                </select>

            </div>

        </div>

            <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                {{ isset($colores) ? 'Actualizar Color' : 'Guardar Color' }}
            </button>

            <a href="/Colores_Tabla"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection