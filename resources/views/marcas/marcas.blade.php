@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Marcas
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

    <form>

        <div class="grid grid-cols-1 gap-6">

            <div>
                <label class="font-semibold">Marca</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar marca
                    </option>

                    <option>Nike</option>
                    <option>Adidas</option>
                    <option>Puma</option>
                    <option>Converse</option>
                    <option>Vans</option>
                    <option>Reebok</option>
                    <option>New Balance</option>

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Guardar Marca
        </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection