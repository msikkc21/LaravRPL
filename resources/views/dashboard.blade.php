<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="w-full md:w-2/3 lg:w-1/2 mx-auto mt-4 bg-slate-400 p-5 rounded-xl shadow-lg">
        <div class="bg-black rounded-xl text-white justify-center flex items-center py-6">
            <h1 class="font-bold text-center text-4xl">DASHBOARD</h1>
        </div>
        <div class="flex gap-5 mt-5">
            <a href="{{ url('/products') }}"
                class="bg-red-500 w-full h-20 justify-center items-center flex rounded-lg font-semibold text-white text-2xl hover:bg-red-400 transition-all duration-200">
                List Products
            </a>
            <a href="{{ url('/chatbot') }}"
                class="bg-yellow-500 w-full h-20 rounded-lg font-semibold text-white flex justify-center items-center text-2xl hover:bg-yellow-400 transition-all duration-200">
                AI Chatbot
            </a>
            <a href="{{ url('/react') }}"
                class="bg-green-500 w-full h-20 rounded-lg font-semibold text-white flex justify-center items-center text-2xl hover:bg-green-400 transition-all duration-200">
                React Demo
            </a>
        </div>
    </section>
</body>

</html>
