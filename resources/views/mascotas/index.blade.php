<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>CRUD Mascotas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 dark:bg-zinc-950 text-slate-900 min-h-screen font-sans">
    <div class="container mx-auto px-4 py-12 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-4">
                <div class="bg-white dark:bg-zinc-900 rounded-2xl shadow-xl p-8 sticky top-8 border border-slate-200">
                    <h2 class="text-xl font-bold mb-6 flex items-center gap-3">
                        <i class="fa-solid fa-paw text-indigo-500"></i> Nueva Mascota
                    </h2>
                    <form method="POST" action="{{ route('mascotas.guardar') }}" class="space-y-4">
                        @csrf
                        <div>
                            <label class="block text-sm font-semibold mb-1 opacity-70">Nombre</label>
                            <input type="text" name="nombre" required class="w-full rounded-xl border p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition-all dark:bg-zinc-800">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold mb-1 opacity-70">Tipo (Especie)</label>
                            <input type="text" name="tipo" required placeholder="Ej. Gato" class="w-full rounded-xl border p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition-all dark:bg-zinc-800">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold mb-1 opacity-70">Edad</label>
                                <input type="number" name="edad" required class="w-full rounded-xl border p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition-all dark:bg-zinc-800">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold mb-1 opacity-70">ID Dueño</label>
                                <input type="number" name="persona_id" required class="w-full rounded-xl border p-3 focus:ring-2 focus:ring-indigo-500 outline-none transition-all dark:bg-zinc-800">
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3.5 rounded-xl transition-all shadow-lg shadow-indigo-500/25 mt-4">
                            Registrar Mascota
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-8">
                <div class="bg-white dark:bg-zinc-900 rounded-2xl shadow-xl overflow-hidden border border-slate-200">
                    <table class="w-full text-left">
                        <thead class="bg-slate-50 dark:bg-zinc-800">
                            <tr class="text-slate-400 text-xs uppercase tracking-widest">
                                <th class="px-8 py-5">Mascota</th>
                                <th class="px-6 py-5">Especie</th>
                                <th class="px-6 py-5 text-center">Dueño ID</th>
                                <th class="px-8 py-5 text-right">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-zinc-800">
                            @foreach ($mascotas as $m)
                            <tr class="hover:bg-slate-50 transition-all">
                                <td class="px-8 py-5 font-bold">{{ $m->nombre }} <span class="text-xs font-normal text-slate-400">({{ $m->edad }} años)</span></td>
                                <td class="px-6 py-5 text-sm uppercase font-medium text-indigo-600">{{ $m->tipo }}</td>
                                <td class="px-6 py-5 text-center font-mono text-sm">#{{ $m->persona_id }}</td>
                                <td class="px-8 py-5 flex justify-end gap-3">
                                    <a href="{{ route('mascotas.editar', $m->id) }}" class="p-2.5 bg-amber-50 text-amber-600 rounded-xl hover:bg-amber-100"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form method="POST" action="{{ route('mascotas.eliminar', $m->id) }}">
                                        @csrf
                                        <button type="submit" class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-100"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>