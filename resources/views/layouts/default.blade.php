<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield("title", "Super blog") </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen bg-red-50">
<header class="block p-4 bg-red-200">
    <nav class="container">
        <ul class="flex justify-center gap-4">
            <li class="bg-blue-800 text-white p-1 px-4 rounded-xl">
                <a href="{{ route("posts.index") }}">Posts</a>
            </li>

            <li class="bg-blue-800 text-white p-1 px-4 rounded-xl">
                <a href="{{ route("categories.index") }}">Categories</a>
            </li>
        </ul>
    </nav>
</header>
<main class="min-h-full">
    <div class="max-w-4xl mx-auto py-10">
        @yield("main")
    </div>
</main>

<footer class="bg-blue-900 text-white">
    footer
</footer>
</body>
</html>
