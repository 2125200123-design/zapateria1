@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Compras
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

    <form>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="font-semibold">Proveedor</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar proveedor
                    </option>

                    <option>Nike</option>
                    <option>Adidas</option>
                    <option>Puma</option>
                    <option>Converse</option>

                </select>
            </div>

            <div>
                <label class="font-semibold">Gasto Total</label>

                <input
                    type="number"
                    min="1"
                    step="0.01"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Fecha Compra</label>

                <input
                    type="date"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Fecha Entrega</label>

                <input
                    type="date"
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Precio</label>

                <input
                    type="number"
                    min="1"
                    step="0.01"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Estado</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar estado
                    </option>

                    <option>Pendiente</option>
                    <option>En camino</option>
                    <option>Entregado</option>
                    <option>Cancelado</option>

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Guardar Compra
        </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection