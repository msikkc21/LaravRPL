<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add New Product</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-2">
    <section class="w-full md:w-2/3 lg:w-1/2 mx-auto mt-4 bg-slate-400 p-5 rounded-xl shadow-lg">
        <div class="bg-black rounded-xl text-white w-full h-16 justify-center flex items-center mb-4">
            <h1 class=" text-center font-bold text-3xl">Add Product</h1>
        </div>
        <a href="{{ url('/products') }}"
            class="bg-indigo-500 py-1 px-2 rounded-lg font-semibold text-white hover:bg-indigo-400 transition-all duration-200"><-
                Back</a>
                <form action="{{ url('/products') }}" method="POST">
                    @csrf
                    <table class="table-auto w-full mt-4 bg-white shadow-lg">
                        <tr>
                            <td class="px-2 py-1"><strong>Name :</strong></td>
                            <td class=" p-2 border-l-2 border-slate-200">
                                <input type="text" name="name" required class="border border-slate-300 rounded-md px-2 py-1 w-full" placeholder="Product Name">
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1"><strong>Description :</strong></td>
                            <td class="p-2 border-l-2 border-slate-200">
                                <input type="text" name="description" required class="border border-slate-300 rounded-md px-2 py-1 w-full" placeholder="Description">
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1"><strong>Price :</strong></td>
                            <td class="p-2 border-l-2 border-slate-200">
                                <input type="number" name="price" required class="border border-slate-300 rounded-md px-2 py-1 w-full" placeholder="Price">
                            </td>
                        </tr>
                        <tr>
                            <td class="px-2 py-1"><strong>Stock :</strong></td>
                            <td class="p-2 border-l-2 border-slate-200">
                                <input type="number" name="stock" required class="border border-slate-300 rounded-md px-2 py-1 w-full" placeholder="Stock">
                            </td>
                        </tr>
                    </table>
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="py-1 px-5 text-lg hover:bg-blue-500 transition-all duration-200 bg-blue-600 text-white font-bold rounded-lg">Save</button>
                    </div>
                </form>
    </section>
</body>

</html>
