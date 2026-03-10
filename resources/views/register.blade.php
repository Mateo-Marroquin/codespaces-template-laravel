<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Registro</h1>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Correo Electrónico</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="tu@email.com"
                    >
                </div>
                
                <!-- Contraseña -->
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Contraseña"
                    >
                </div>
                
                <!-- Botón Registrarse -->
                <button 
                    type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200"
                >
                    Registrarse
                </button>
            </form>
            
            <!-- Link Login -->
            <p class="text-center text-gray-600 mt-4">
                ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">Inicia sesión</a>
            </p>
        </div>
    </div>
</body>
</html>