@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Empleados
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

        <form>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="font-semibold">Nombre</label>

                    <input
                        type="text"
                        placeholder="Nombre completo"
                        minlength="3"
                        maxlength="80"
                        pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Correo</label>

                    <input
                        type="email"
                        placeholder="correo@gmail.com"
                        maxlength="100"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">RFC</label>

                    <input
                        type="text"
                        placeholder="RFC"
                        minlength="13"
                        maxlength="13"
                        required
                        pattern="^[A-Za-zÑñ&]{3,4}[0-9]{6}[A-Za-z0-9]{3}$"
                        class="w-full border rounded-lg p-3 mt-2 uppercase"
                    >
                </div>

                <div>
                    <label class="font-semibold">Teléfono</label>

                    <input
                        type="tel"
                        placeholder="3330000000"
                        minlength="10"
                        maxlength="10"
                        pattern="[0-9]{10}"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Dirección</label>

                    <input
                        type="text"
                        placeholder="Dirección"
                        maxlength="150"
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Edad</label>

                    <input
                        type="number"
                        min="18"
                        max="100"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Contraseña</label>

                    <input
                        type="password"
                        minlength="8"
                        maxlength="100"
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
                    <label class="font-semibold">Rol</label>

                    <select
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                        <option value="">------</option>
                        <option>Administrador</option>
                        <option>Vendedor</option>
                        <option>Supervisor</option>
                    </select>
                </div>

                <div>
                    <label class="font-semibold">Estado</label>

                    <select
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                        <option value="">------</option>
                        <option>Activo</option>
                        <option>Inactivo</option>
                    </select>
                </div>

            </div>

            <button
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl"
            >
                Guardar Empleado
            </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

        </form>

</div>

@endsection