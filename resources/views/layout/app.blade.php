<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>My App</title>
</head>
<body>

    <header class="bg-green-600 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo / Title -->
        <h1 class="text-xl font-bold">
            My Laravel App
        </h1>

        <!-- Navigation Links -->
        <nav class="space-x-6">
            <a href="/" class="hover:text-green-200">1111</a>
            <a href="/about" class="hover:text-green-200">1111</a>
            <a href="/contact" class="hover:text-green-200">2222</a>
        </nav>

    </div>
</header>




    @yield('content')
    



    <footer class="bg-green-600 text-white py-6 mt-10">
    <div class="max-w-7xl mx-auto px-4 text-center">
        
        <h2 class="text-xl font-semibold">My Laravel App</h2>
        
        <p class="mt-2 text-green-100">
            © 2026 All rights reserved.
        </p>

        <div class="mt-4 space-x-4">
            <a href="#" class="hover:text-green-200">Home</a>
            <a href="#" class="hover:text-green-200">About</a>
            <a href="#" class="hover:text-green-200">Contact</a>
        </div>

    </div>
</footer>
</body>
</html>