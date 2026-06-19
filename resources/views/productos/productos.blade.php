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
                    <input 
                    value="{{ $producto->nombre_producto ?? '' }}"
                    name="nombre_producto" 
                    type="text" 
                    required class="w-full border rounded-lg p-3 mt-2"
                    placeholder="Nombre del producto"
                    value 
                    >
                </div>

                <div>
                    <label class="font-semibold">Descripción</label>
                    <textarea name="descripcion" class="w-full border rounded-lg p-3 mt-2" placeholder="Descripción del producto">{{ $producto->descripcion ?? '' }}</textarea>
                </div>

                <div>
                    <label class="font-semibold">Precio</label>
                    <input name="precio" type="number" min="1" step="0.01" required
                        class="w-full border rounded-lg p-3 mt-2" value="{{ $producto->precio ?? '' }}">
                </div>

                <div>
                    <label class="font-semibold">Existencia</label>
                    <input name="existencia" type="number" min="0" required
                        class="w-full border rounded-lg p-3 mt-2" value="{{ $producto->existencia ?? '' }}">
                </div>

                <div>
                    <label class="font-semibold">Imagen</label>
                    <input name="imagen" type="file" accept="image/*" required
                        class="w-full border rounded-lg p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold">Imagen 2</label>
                    <input name="imagen" type="file" accept="image/*" required
                        class="w-full border rounded-lg p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold">Imagen 3</label>
                    <input name="imagen" type="file" accept="image/*" required
                        class="w-full border rounded-lg p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold">Proveedor</label>
                    <select name="proveedor_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar proveedor</option>

                        @foreach ($proveedores as $proveedor)
                            <option value="{{ $proveedor->proveedor_id }}"
                                {{ ($producto->proveedor_id ?? '') == $proveedor->proveedor_id ? 'selected' : '' }}>
                                {{ $proveedor->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Talla</label>
                    <select name="talla_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar talla</option>

                        @foreach ($tallas as $talla)
                            <option value="{{ $talla->talla_id }}"
                                {{ ($producto->talla_id ?? '') == $talla->talla_id ? 'selected' : '' }}>
                                {{ $talla->talla }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Marca</label>
                    <select name="marca_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar marca</option>

                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->marca_id }}"
                                {{ ($producto->marca_id ?? '') == $marca->marca_id ? 'selected' : '' }}>
                                {{ $marca->marca }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Color</label>
                    <select name="color_id" required class="w-full border rounded-lg p-3 mt-2">
                        <option value="">Seleccionar color</option>

                        @foreach ($colores as $color)
                            <option value="{{ $color->color_id}}"
                                {{ ($producto->color_id ?? '') == $color->color_id ? 'selected' : '' }}>
                                {{ $color->color }}
                            </option>
                        @endforeach
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

            <a href="/" class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

        </form>

    </div>
@endsection
