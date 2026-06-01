@extends('/Plantilla/plantilla')

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

    <form>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="font-semibold">Nombre del Producto</label>

                <input
                    type="text"
                    minlength="3"
                    maxlength="100"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                    placeholder="Nombre del producto"
                >
            </div>

            <div>
                <label class="font-semibold">Descripción</label>

                <textarea
                    minlength="5"
                    maxlength="255"
                    class="w-full border rounded-lg p-3 mt-2"
                    placeholder="Descripción del producto"
                ></textarea>
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
                <label class="font-semibold">Existencia</label>

                <input
                    type="number"
                    min="0"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

            <div>
                <label class="font-semibold">Imagen</label>

                <input
                    type="file"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="w-full border rounded-lg p-3 mt-2"
                >
            </div>

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
                <label class="font-semibold">Talla</label>

                <select
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                >

                    <option value="">
                        Seleccionar talla
                    </option>

                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>

                </select>
            </div>

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
                    <option>Vans</option>

                </select>
            </div>

            <div>
                <label class="font-semibold">Color</label>

                <select
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

                </select>
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

                    <option>Disponible</option>
                    <option>Agotado</option>
                    <option>Descontinuado</option>

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Guardar Producto
        </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection