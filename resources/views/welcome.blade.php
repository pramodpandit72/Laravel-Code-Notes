<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Tailwind</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900">

<div>
  <!-- HEADER -->
  <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8">
      
      <!-- LOGO -->
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
               class="h-8 w-auto dark:hidden" />
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
               class="h-8 w-auto hidden dark:block" />
        </a>
      </div>

      <!-- MOBILE BUTTON -->
      <div class="flex lg:hidden">
        <button onclick="openMenu()" class="p-2 text-gray-700 dark:text-gray-200">
          ☰
        </button>
      </div>

      <!-- DESKTOP MENU -->
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Product</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Features</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Marketplace</a>
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">Company</a>
      </div>

      <!-- LOGIN -->
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold text-gray-900 dark:text-white">
          Log in →
        </a>
      </div>
    </nav>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden fixed inset-0 z-50 bg-white dark:bg-gray-900 p-6">
      
      <div class="flex justify-between items-center">
        <h2 class="text-lg font-bold text-gray-900 dark:text-white">Menu</h2>
        <button onclick="closeMenu()" class="text-gray-700 dark:text-gray-200 text-xl">✕</button>
      </div>

      <div class="mt-6 space-y-4">
        <a href="#" class="block text-gray-900 dark:text-white">Product</a>
        <a href="#" class="block text-gray-900 dark:text-white">Features</a>
        <a href="#" class="block text-gray-900 dark:text-white">Marketplace</a>
        <a href="#" class="block text-gray-900 dark:text-white">Company</a>
        <a href="#" class="block text-gray-900 dark:text-white">Log in</a>
      </div>
    </div>
  </header>

  <!-- HERO SECTION -->
  <div class="relative isolate px-6 pt-20 lg:px-8">

    <!-- BACKGROUND -->
    <div class="absolute inset-x-0 -top-40 -z-10 blur-3xl">
      <div class="w-[36rem] h-[20rem] bg-gradient-to-tr from-pink-400 to-indigo-400 opacity-30 mx-auto"></div>
    </div>

    <div class="mx-auto max-w-2xl py-32 text-center">
      
      <h1 class="text-5xl font-bold text-gray-900 sm:text-7xl dark:text-white">
        Laravel
      </h1>

      <p class="mt-6 text-lg text-gray-500 dark:text-gray-400">
        Build powerful full-stack apps using Laravel and Tailwind CSS.
      </p>

      <div class="mt-10 flex justify-center gap-x-6">
        <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-500">
          Get Started
        </a>

        <a href="#" class="text-gray-900 dark:text-white font-semibold">
          Learn more →
        </a>
      </div>
    </div>
  </div>
</div>

<!-- SIMPLE JS -->
<script>
    function openMenu() {
        document.getElementById('mobileMenu').classList.remove('hidden');
    }

    function closeMenu() {
        document.getElementById('mobileMenu').classList.add('hidden');
    }
</script>

</body>
</html>