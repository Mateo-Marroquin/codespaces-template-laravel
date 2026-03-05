<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 dark:bg-zinc-950 text-slate-900 dark:text-zinc-100 min-h-screen font-sans flex items-center justify-center p-4">

    <div class="w-full max-w-xl">
        <a href="{{ route('inicio.admin') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 transition-colors mb-6 font-medium">
            <i class="fa-solid fa-arrow-left-long"></i>
            Volver al listado
        </a>

        <div class="bg-white dark:bg-zinc-900 rounded-3xl shadow-xl shadow-slate-200/60 dark:shadow-none border border-slate-200 dark:border-zinc-800 overflow-hidden">
            
            <div class="bg-blue-600 p-8 text-white">
                <div class="flex items-center gap-4">
                    <div class="h-12 w-12 bg-white/20 rounded-2xl flex items-center justify-center backdrop-blur-sm">
                        <i class="fa-solid fa-user-pen text-xl"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold">Modificar Persona</h1>
                        <p class="text-blue-100 text-sm">Actualiza la información del registro #{{ $persona->id }}</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="{{ route('modifica.persona', $persona->id) }}" class="p-8 space-y-5">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Nombre</label>
                        <div class="relative">
                            <i class="fa-solid fa-signature absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                            <input type="text" name="nombre" value="{{ $persona->nombre }}" required
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Apellido</label>
                        <div class="relative">
                            <i class="fa-solid fa-user absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                            <input type="text" name="apellido" value="{{ $persona->apellido }}" required
                                class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all">
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Edad Actual</label>
                    <div class="relative">
                        <i class="fa-solid fa-cake-candles absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                        <input type="number" name="edad" value="{{ $persona->edad }}" required
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-sm font-bold text-slate-600 dark:text-zinc-400 ml-1">Dirección de Domicilio</label>
                    <div class="relative">
                        <i class="fa-solid fa-location-dot absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                        <input type="text" name="direccion" value="{{ $persona->direccion }}" required
                            class="w-full pl-11 pr-4 py-3 rounded-xl border border-slate-200 dark:border-zinc-700 bg-slate-50 dark:bg-zinc-800/50 focus:ring-2 focus:ring-blue-500 focus:bg-white outline-none transition-all">
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 rounded-2xl transition-all shadow-lg shadow-blue-500/30 flex items-center justify-center gap-3 transform active:scale-[0.98]">
                        <i class="fa-solid fa-floppy-disk"></i>
                        Actualizar Información
                    </button>
                    <p class="text-center text-xs text-slate-400 mt-4 uppercase tracking-widest font-medium">
                        Verifica los datos antes de guardar
                    </p>
                </div>
            </form>
        </div>
    </div>

</body>
</html>