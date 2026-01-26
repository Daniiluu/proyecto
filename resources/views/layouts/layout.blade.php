<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="bg-cyan-950 flex items-center justify-between">
        <img src="logo.jpg" alt="" class="ml-8 w-4">
        <nav class="flex mr-4">
            <a href="" class="text-white mr-2">Noticias</a>
            <a href="" class="text-white mr-2">Proyectos</a>
            <a href="" class="text-white mr-2">Register</a>
            <a href="" class="text-white mr-2">Login</a>
        </nav>
    </header>
        {{ $slot }}
    <footer>

    </footer>
</body>
</html>
