<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hola</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" crossorigin="anonymous"></script>


</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <div class="w-1/2 borber border-gray-300 rounded-md p-6 bg-gray-100 shadow-md">
        <form method='post' action='{{ route('guardar.admin') }}'>
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Nombre: </label>
                <input type="text"
                    class="form-control border border-gray-500 rounded-md p-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    name="nombre" id="" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Apellido: </label>
                <input type="text"
                    class="form-control border border-gray-500 rounded-md p-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    name="apellido" id="" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Direccion: </label>
                <input type="text"
                    class="form-control border border-gray-500 rounded-md p-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    name="direccion" id="" aria-describedby="helpId" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Edad: </label>
                <input type="number"
                    class="form-control border border-gray-500 rounded-md p-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    name="edad" id="" aria-describedby="helpId" placeholder="" />
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Enviar
            </button>
        </form>
    </div>

    <div class="w-1/2 borber border-gray-300 rounded-md p-4 bg-gray-100 shadow-md mt-6">

        <table class="table-auto text-center w-full border-collapse border border-gray-300 rounded-lg bg-white">

            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2">Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Edad</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-300">
                @foreach ($personas as $persona)
                    <tr>
                        <td>{{ $persona->nombre }}</td>
                        <td>{{ $persona->apellido }}</td>
                        <td>{{ $persona->direccion }}</td>
                        <td>{{ $persona->edad }}</td>
                        <td class="text-center gap-4">
                            <form method='post' action='{{ route('eliminar.admin', $persona->id) }}'>
                                <button
                                    class="bg-green-500 text-white font-bold py-1 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                    @csrf
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd"
                                            d="M2 5a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V5z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <tr>
                    <td class="py-2">Juan</td>
                    <td>Perez</td>
                    <td>Calle 123</td>
                    <td>30</td>
                    <td class="text-center gap-4">
                        <button
                            class="bg-green-500 text-white font-bold py-1 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Editar
                        </button>
                        <button
                            class="bg-red-500 text-white font-bold py-1 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Eliminar
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Maria</td>
                    <td>Gomez</td>
                    <td>Avenida 456</td>
                    <td>25</td>
                    <td class="text-center gap-4">
                        <button
                            class="bg-green-500 text-white font-bold py-1 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Editar
                        </button>
                        <button
                            class="bg-red-500 text-white font-bold py-1 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Eliminar
                        </button>
                    </td>
                </tr>

                <tr>
                    <td class="py-2">Carlos</td>
                    <td>Lopez</td>
                    <td>Calle 789</td>
                    <td>40</td>
                    <td class="text-center gap-4">
                        <button
                            class="bg-green-500 text-white font-bold py-1 px-3 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            Editar
                        </button>
                        <button
                            class="bg-red-500 text-white font-bold py-1 px-3 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                            Eliminar
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
</body>

</html>
