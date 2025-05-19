<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List Products</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="px-2">
    <section class=" w-full md:w-2/3 lg:w-1/2 mx-auto mt-4 bg-slate-400 p-5 rounded-xl shadow-lg">
        <div class="bg-black rounded-xl text-white w-full h-16 justify-center flex items-center mb-4">
            <h1 class=" text-center font-bold text-3xl">Product List</h1>
        </div>
        <a href="{{ url('/products/create') }}"
            class="bg-indigo-500 py-1 px-2 rounded-lg font-semibold text-white hover:bg-indigo-400 transition-all duration-200">Add
            Product</a>
        <table class="table-auto w-full mt-4 bg-white shadow-lg roundedxl">
            <tr class="border-b-2 border-slate-500 bg-slate-200 text-center">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Price</th>
                <th class="px-4 py-2">Stock</th>
                <th class="px-4 py-2">Action</th>
            </tr>
            @foreach ($products as $product)
                <tr class="border-b-2 border-slate-300 text-center">
                    <td class="py-1 text-center">{{ $product->id }}</td>
                    <td class="py-1 px-1 text-center">{{ $product->name }}</td>
                    <td class="py-1 px-1 text-center">${{ $product->price }}</td>
                    <td class="py-1 px-1 text-center">{{ $product->stock }}</td>
                    <td class="py-1 flex justify-center items-center px-1 gap-2">
                        <a href="{{ url('/products', $product->id) }}"
                            class="bg-blue-700 py-1 px-2 rounded-lg text-white font-semibold hover:bg-blue-400 transition-all duration-200">View</a>
                        <a href="{{ url('/products/' . $product->id . '/edit') }}"
                            class="bg-yellow-500 py-1 px-2 rounded-lg text-white font-semibold hover:bg-yellow-400 transition-all duration-200">Edit</a>
                        <form action="{{ url('/products', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')"
                                class="bg-red-600 py-1 px-2 rounded-lg text-white font-semibold hover:bg-red-500 transition-all duration-200 cursor-pointer">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <div class="mt-4 bg-slate-200 p-4 rounded-lg">
            <h3 class="font-bold text-lg">Expensive Products (Price > 400)</h3>
            <ul class="list-disc pl-5">
                @foreach ($expensiveProducts as $product)
                    <li>{{ $product->name }} - Price: {{ number_format($product->price) }}</li>
                @endforeach
            </ul>
    
            <h3 class="font-bold text-lg mt-5">Statistics</h3>
            <p><b>Average Price:</b> {{ number_format($averagePrice, 2) }}</p>
        </div>

    </section>

</body>

</html>
