@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Contactos
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
                    minlength="3"
                    maxlength="80"
                    required
                    pattern="[A-Za-zÁÉÍÓÚáéíóúñÑ\s]+"
                    class="w-full border rounded-lg p-3 mt-2"
                    placeholder="Nombre completo"
                >
            </div>

            <div>
                <label class="font-semibold">Correo</label>

                <input
                    type="email"
                    maxlength="100"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                    placeholder="correo@gmail.com"
                >
            </div>

            <div>
                <label class="font-semibold">Teléfono</label>

                <input
                    type="tel"
                    minlength="10"
                    maxlength="10"
                    pattern="[0-9]{10}"
                    required
                    class="w-full border rounded-lg p-3 mt-2"
                    placeholder="3330000000"
                >
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            Guardar Contacto
        </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection