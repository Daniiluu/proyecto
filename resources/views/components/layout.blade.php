<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite (["resources/css/app.css","resources/js/app.js"])
</head>
<body class="min-h-screen">
<header class=" fixed w-full top-0 bg-blue-950 text-white w-auto h-20 mx-auto flex items-center justify-between px-6 py-4">
        <h1 class="text-xl font-bold">
            LOGOTIPO
        </h1>
    @guest
        <nav class="flex gap-6">
            <a href="{{ route('register') }}" class="hover:text-gray-200 transition">Register</a>
            <a href="{{ route('login') }}" class="hover:text-gray-200 transition">Login</a>
        </nav>
    @endguest
    @auth
        <nav class="flex">
            <a href="{{ route('projects.index') }}"class="hover:text-gray-200 transitio mr-8 hover:underline">Proyectos</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-white hover:underline mr-8">
                    Logout
                </button>
            </form>
            <a href="" class="hover:text-gray-200 transition hover:underline">{{auth()->user()->name}}</a>
        </nav>

    @endauth
</header>
        {{ $slot }}
<footer class="bottom-0 bg-slate-900 text-slate-400">
    <div class=" max-w-7xl mx-auto px-6 py-4 text-center text-sm">
        LOGOTIPO · Todos los derechos reservados
    </div>
</footer>

</body>
</html>
