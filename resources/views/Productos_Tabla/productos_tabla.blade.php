@extends('/Plantilla/plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tabla de Productos
        </h1>

        <p class="text-gray-500 mt-2">
            Visualización de productos registrados
        </p>
    </div>

    <div class="p-5">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Imagen</th>
                        <th class="p-4 text-left">Nombre producto</th>
                        <th class="p-4 text-left">Descripción</th>
                        <th class="p-4 text-left">Precio</th>
                        <th class="p-4 text-left">Existencia</th>
                        <th class="p-4 text-left">Proveedor</th>
                        <th class="p-4 text-left">Talla</th>
                        <th class="p-4 text-left">Color</th>
                        <th class="p-4 text-left">Marca</th>
                        <th class="p-4 text-left">Estado</th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($productos as $producto)
                        <tr class="border-b hover:bg-gray-100">

                            <td class="p-4">{{ $producto->producto_id }}</td>

                            <td class="p-4">
                                {{ $producto->imagen }}
                            </td>

                            <td class="p-4">{{ $producto->nombre_producto }}</td>

                            <td class="p-4">{{ $producto->descripcion }}</td>

                            <td class="p-4">{{ $producto->precio }}</td>

                            <td class="p-4">{{ $producto->existencia }}</td>

                            <td class="p-4">{{ $producto->proveedor }}</td>

                            <td class="p-4">{{ $producto->talla }}</td>

                            <td class="p-4">{{ $producto->color }}</td>

                            <td class="p-4">{{ $producto->marca }}</td>

                            <td class="p-4">{{ $producto->estado }}</td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

        <a href="/Productos" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl">
            Nuevo Producto
        </a>

        <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Regresar
        </a>

    </div>
@endsection
