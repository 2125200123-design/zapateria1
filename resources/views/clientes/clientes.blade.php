@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Clientes
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

    <div class="min-h-screen bg-gray-100 py-10 px-6">
        @if(isset($cliente))
            <form action="/clientes/actualizar/{{ $cliente->cliente_id }}" method="POST">
        @else
            <form action="/clientes/guardar" method="POST">
        @endif

        @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div>
                    <label class="font-semibold">Nombre</label>

                    <input
                        value="{{ $cliente->nombre ?? '' }}"
                        type="text"
                        name="nombre"
                        maxlength="80"
                        minlength="3"
                        required
                        pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                        class="w-full border rounded-lg p-3 mt-2"
                        placeholder="Nombre completo"
                    >
                </div>

                <div>
                    <label class="font-semibold">Correo</label>

                    <input
                        value="{{ $cliente->correo ?? '' }}"
                        type="email"
                        name="correo"
                        maxlength="100"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                        placeholder="correo@gmail.com"
                    >
                </div>

                <div>
                    <label class="font-semibold">RFC</label>

                    <input
                        value="{{ $cliente->rfc ?? '' }}"
                        type="text"
                        name="rfc"
                        minlength="13"
                        maxlength="13"
                        pattern="[A-ZÑ&]{3,4}[0-9]{6}[A-Z0-9]{3}"
                        class="w-full border rounded-lg p-3 mt-2"
                        placeholder="RFC"
                    >
                </div>

                <div>
                    <label class="font-semibold">Teléfono</label>

                    <input
                        value="{{ $cliente->telefono ?? '' }}"
                        type="tel"
                        name="telefono"
                        minlength="10"
                        maxlength="10"
                        pattern="[0-9]{10}"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                        placeholder="3330000000"
                    >
                </div>

                <div>
                    <label class="font-semibold">Dirección</label>

                    <input
                        value="{{ $cliente->direccion ?? '' }}"
                        type="text"
                        name="direccion"
                        maxlength="150"
                        class="w-full border rounded-lg p-3 mt-2"
                        placeholder="Dirección"
                    >
                </div>

                <div>
                    <label class="font-semibold">Edad</label>

                    <input
                        value="{{ $cliente->edad ?? '' }}"
                        type="number"
                        name="edad"
                        min="18"
                        max="100"
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Contraseña</label>

                    <input
                        value="{{ $cliente->contrasena ?? '' }}"
                        type="password"
                        name="contrasena"
                        minlength="8"
                        maxlength="100"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Imagen</label>

                    <input
                        value="{{ $cliente->imagen ?? '' }}"
                        type="file"
                        name="imagen"
                        accept=".jpg,.jpeg,.png,.webp"
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                </div>

                <div>
                    <label class="font-semibold">Estado</label>

                    <select
                        value="{{ $cliente->estado ?? '' }}"
                        name="estado"
                        required
                        class="w-full border rounded-lg p-3 mt-2"
                    >
                        <option value="">------</option>
                        <option value="activo">Activo</option>
                        <option value="inactivo">Inactivo</option>
                        <option value="bloqueado">Bloqueado</option>
                    </select>
                </div>

            </div>

            <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                {{ isset($cliente) ? 'Actualizar Cliente' : 'Guardar Cliente' }}
            </button>

        </form>
    </div>
</div>

@endsection