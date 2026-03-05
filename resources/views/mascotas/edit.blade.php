<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Mascota | CACEI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 dark:bg-zinc-950 text-slate-900 dark:text-zinc-100 min-h-screen font-sans flex items-center justify-center p-4">

    <div class="w-full max-w-xl">
        <a href="{{ route('mascotas.index') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-indigo-600 transition-colors mb-6 font-medium">
            <i class="fa-solid fa-arrow-left-long"></i>
            Volver al listado de mascotas
        </a>

        <div class="bg-white dark:bg-zinc-900 rounded-3xl shadow-xl shadow-slate-200/60 dark:shadow-none border border-slate-200 dark:border-zinc-800 overflow-hidden">
            
            <div class="bg-indigo-600 p-8 text-white">
                <div class="flex items-center gap-4">
                    <div class="h-12 w-12 bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-paw text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold">Editar Mascota</h1>
                        <p class="text-indigo-100 text-sm">Actualizando datos de: <span class="font-bold underline">{{ $mascota->nombre }}</span></p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('mascotas.actualizar', $mascota->id) }}" class="p-8 space-y-5">
                @csrf
                
                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Nombre de la Mascota</label>
                    <div class="relative">
                        <i class="fa-solid fa-tag absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                        <input type="text" name="nombre" value="{{ $mascota->nombre }}" required
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Especie / Tipo</label>
                        <div class="relative">
                            <i class="fa-solid fa-dog absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                            <input type="text" name="tipo" value="{{ $mascota->tipo }}" required
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Edad (años)</label>
                        <div class="relative">
                            <i class="fa-solid fa-hourglass-half absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                            <input type="number" name="edad" value="{{ $mascota->edad }}" required
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">ID del Dueño (Persona)</label>
                    <div class="relative">
                        <i class="fa-solid fa-id-card absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                        <input type="number" name="persona_id" value="{{ $mascota->persona_id }}" required
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-indigo-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-4 rounded-2xl transition-all shadow-lg shadow-indigo-500/30 flex items-center justify-center gap-3 transform active:scale-[0.98]">
                        <i class="fa-solid fa-rotate"></i>
                        Actualizar Registro
                    </button>
                    <p class="text-center text-xs text-slate-400 mt-4 uppercase tracking-widest font-medium">
                        Confirmación de cambios para el sistema CACEI
                    </p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>