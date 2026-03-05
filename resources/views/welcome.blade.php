<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Personal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-slate-50 dark:bg-zinc-950 text-slate-900 dark:text-zinc-100 min-h-screen font-sans">

    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-slate-800 dark:text-white">Control de Usuarios</h1>
            <p class="text-slate-500 mt-2 text-lg">Dashboard</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <div class="lg:col-span-4">
                <div class="bg-white dark:bg-zinc-900 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-200 dark:border-zinc-800 p-8 sticky top-8">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-3">
                        <div class="p-2 bg-blue-500 rounded-lg text-white">
                            <i class="fa-solid fa-user-plus"></i>
                        </div>
                        Nuevo Registro
                    </h2>
                    
                    <form method="POST" action="{{ route('guardar.admin') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold mb-2 opacity-70">Nombre</label>
                            <input type="text" name="nombre" required placeholder="Ej. Mateo"
                                class="w-full rounded-xl border border-slate-300 dark:border-zinc-700 bg-transparent p-3 focus:ring-2 focus:ring-blue-500 outline-none transition-all dark:bg-zinc-800/50">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2 opacity-70">Apellido</label>
                            <input type="text" name="apellido" required placeholder="Ej. Pérez"
                                class="w-full rounded-xl border border-slate-300 dark:border-zinc-700 bg-transparent p-3 focus:ring-2 focus:ring-blue-500 outline-none transition-all dark:bg-zinc-800/50">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2 opacity-70">Dirección</label>
                            <input type="text" name="direccion" required placeholder="Av. Universidad..."
                                class="w-full rounded-xl border border-slate-300 dark:border-zinc-700 bg-transparent p-3 focus:ring-2 focus:ring-blue-500 outline-none transition-all dark:bg-zinc-800/50">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold mb-2 opacity-70">Edad</label>
                            <input type="number" name="edad" required placeholder="21"
                                class="w-full rounded-xl border border-slate-300 dark:border-zinc-700 bg-transparent p-3 focus:ring-2 focus:ring-blue-500 outline-none transition-all dark:bg-zinc-800/50">
                        </div>

                        <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3.5 rounded-xl transition-all transform hover:scale-[1.02] active:scale-95 shadow-lg shadow-blue-500/25 mt-4">
                            Guardar Registro
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-8">
                <div class="bg-white dark:bg-zinc-900 rounded-2xl shadow-xl shadow-slate-200/50 dark:shadow-none border border-slate-200 dark:border-zinc-800 overflow-hidden">
                    <div class="p-6 border-b border-slate-100 dark:border-zinc-800 flex justify-between items-center bg-slate-50/50 dark:bg-zinc-800/30">
                        <h2 class="text-xl font-bold flex items-center gap-3">
                            <i class="fa-solid fa-database text-blue-500"></i> Base de Datos
                        </h2>
                        <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 text-xs font-bold rounded-full">
                            {{ count($personas) }} Registros
                        </span>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="text-slate-400 text-xs uppercase tracking-widest border-b border-slate-100 dark:border-zinc-800">
                                    <th class="px-8 py-5 font-bold">Persona</th>
                                    <th class="px-6 py-5 font-bold">Ubicación</th>
                                    <th class="px-6 py-5 font-bold text-center">Edad</th>
                                    <th class="px-8 py-5 font-bold text-right">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50 dark:divide-zinc-800">
                                @foreach ($personas as $persona)
                                    <tr class="hover:bg-slate-50/80 dark:hover:bg-zinc-800/50 transition-all group">
                                        <td class="px-8 py-5">
                                            <div class="flex items-center gap-3">
                                                <div class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/20 text-blue-600 flex items-center justify-center font-bold">
                                                    {{ substr($persona->nombre, 0, 1) }}
                                                </div>
                                                <div>
                                                    <p class="font-bold text-slate-800 dark:text-white">{{ $persona->nombre }}</p>
                                                    <p class="text-xs text-slate-400">{{ $persona->apellido }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-5 text-sm text-slate-500 dark:text-zinc-400">
                                            <i class="fa-solid fa-location-dot mr-1 text-slate-300"></i> {{ $persona->direccion }}
                                        </td>
                                        <td class="px-6 py-5 text-center">
                                            <span class="px-2 py-1 rounded-md bg-slate-100 dark:bg-zinc-800 text-xs font-medium">
                                                {{ $persona->edad }} años
                                            </span>
                                        </td>
                                        <td class="px-8 py-5">
                                            <div class="flex justify-end gap-3">
                                                <a href="{{ route('mostrar.persona', $persona->id) }}" 
                                                   class="p-2.5 bg-amber-50 dark:bg-amber-900/10 text-amber-600 hover:bg-amber-100 rounded-xl transition-all"
                                                   title="Editar datos">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>

                                                <form method="POST" action="{{ route('eliminar.admin', $persona->id) }}" onsubmit="return confirm('¿Seguro que quieres eliminar este registro?')">
                                                    @csrf
                                                    <button type="submit" 
                                                        class="p-2.5 bg-rose-50 dark:bg-rose-900/10 text-rose-600 hover:bg-rose-100 rounded-xl transition-all"
                                                        title="Eliminar registro">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>