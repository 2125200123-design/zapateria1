@extends('/Plantilla/plantilla')

@section('content')

    <div class="tmb-5 pl-5">
        <h1 class="text-4xl font-bold text-indigo-700">
            Tallas
        </h1>

        <p class="text-gray-500 mt-2">
            Registro de información
        </p>
    </div>

<div class="min-h-screen bg-gray-100 py-10 px-6">

        @if (isset($talla))
            <form action="/tallas/actualizar/{{ $talla->talla_id }}" method="POST">
            @else
                <form action="/tallas/guardar" method="POST">
        @endif
        @csrf

        <div class="grid grid-cols-1 gap-6">

            <div>
                <label class="font-semibold">Talla</label>

                <select
                    required
                    name="talla"
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
                    <option>29</option>
                    <option>30</option>

                </select>
            </div>

        </div>

        <button class="mt-8 bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
            {{ isset($talla) ? 'Actualizar Talla' : 'Guardar Talla' }}
        </button>

            <a href="/"
                class="mt-8 inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl">
                Regresar
            </a>

    </form>

</div>

@endsection