@extends('Plantilla.plantilla')

@section('content')
    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Productos
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">

        <form action="/productos/guardar" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="font-semibold">Nombre del Producto</label>
                    <input name="nombre_producto" type="text" required class="w-full border rounded-lg p-3 mt-2"
                        placeholder="Nombre del producto">
                </div>

                <div>
                    <label class="font-semibold">Descripción</label>
                    <textarea name="descripcion" class="w-full border rounded-lg p-3 mt-2" placeholder="Descripción del producto"></textarea>
                </div>

                <div>
                    <label class="font-semibold">Precio</label>
                    <input name="precio" type="number" min="1" step="0.01" required
                        class="w-full border rounded-lg p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold">Existencia</label>
                    <input name="existencia" type="number" min="0" required
                        class="w-full border rounded-lg p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold">Imagen</label>
                    <input name="imagen" type="file" class="w-full border rounded-lg p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold">Proveedor</label>
                    <select name="proveedor_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar proveedor</option>
                        <option value="1">Nike</option>
                        <option value="2">Adidas</option>
                        <option value="3">Puma</option>
                        <option value="4">Converse</option>
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Talla</label>
                    <select name="talla_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar talla</option>
                        <option value="1">22</option>
                        <option value="2">23</option>
                        <option value="3">24</option>
                        <option value="4">25</option>
                        <option value="5">26</option>
                        <option value="6">27</option>
                        <option value="7">28</option>
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Marca</label>
                    <select name="marca_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar marca</option>
                        <option value="1">Nike</option>
                        <option value="2">Adidas</option>
                        <option value="3">Puma</option>
                        <option value="4">Vans</option>
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Color</label>
                    <select name="color_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar color</option>
                        <option value="1">Negro</option>
                        <option value="2">Blanco</option>
                        <option value="3">Rojo</option>
                        <option value="4">Azul</option>
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Estado</label>
                    <select name="estado" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar estado</option>
                        <option value="Disponible">Disponible</option>
                        <option value="Agotado">Agotado</option>
                        <option value="Descontinuado">Descontinuado</option>
                    </select>
                </div>

            </div>

            <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Guardar Producto
            </button>

            <a href="/Productos_Tabla"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

        </form>

    </div>
@endsection
