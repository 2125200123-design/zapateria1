@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Ventas
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

    <form>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="font-semibold">Cliente</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar cliente
                    </option>

                    <option>Juan Pérez</option>
                    <option>María López</option>
                    <option>Carlos Ramírez</option>

                </select>
            </div>

            <div>
                <label class="font-semibold">Empleado</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar empleado
                    </option>

                    <option>Administrador</option>
                    <option>Vendedor</option>
                    <option>Supervisor</option>

                </select>
            </div>

            <div>
                <label class="font-semibold">Método de Pago</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar método
                    </option>

                    <option>Efectivo</option>
                    <option>Tarjeta</option>
                    <option>Transferencia</option>

                </select>
            </div>

            <div>
                <label class="font-semibold">Subtotal</label>

                <input
                    type="number"
                    min="0.01"
                    step="0.01"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Descuento</label>

                <input
                    type="number"
                    min="0"
                    step="0.01"
                    value="0"
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">IVA</label>

                <input
                    type="number"
                    min="0.01"
                    step="0.01"
                    value="0"
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Total</label>

                <input
                    type="number"
                    min="0.01"
                    step="0.01"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Fecha Venta</label>

                <input
                    type="date"
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

                    <option>Pagado</option>
                    <option>Pendiente</option>
                    <option>Cancelado</option>

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Guardar Venta
        </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection