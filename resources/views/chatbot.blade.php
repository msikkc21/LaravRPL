<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ChatBot</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-5 lg:flex lg:justify-center gap-5">
    <section class="w-full md:w-2/3 lg:w-1/2 mx-auto mt-4 bg-slate-400 p-5 rounded-xl shadow-lg">
        <div class="bg-black rounded-xl text-white w-full h-16 justify-center flex items-center mb-4">
            <h1 class=" text-center font-bold text-3xl">AI Chatbot</h1>
        </div>
        <form id="chat-form" method="POST" action="/ask-llama" class="bg-white shadow-lg rounded-xl p-4">
            @csrf
            <textarea name="prompt" rows="5" cols="60" placeholder="Tulis pertanyaanmu..." class="w-full p-1 rounded-lg">{{ old('prompt', session('prompt')) }}</textarea><br>
            <button type="submit" class="bg-blue-600 hover:bg-blue-500 py-1 px-3 rounded-lg font-bold text-white">Kirim</button>
        </form>
    </section>
    <section class="w-full md:w-2/3 lg:w-1/2 mx-auto mt-4 bg-slate-200 p-5 rounded-xl shadow-lg mb-10">
        <h2 class="font-semibold">Jawaban :</h2>
        @if(session('response'))
            <div style="margin-top: 20px;">
                <textarea id="markdown" style="display:none;">{{ session('response') }}</textarea>
                <div id="preview"></div>
            </div>
        @endif
    </section>


</body>

<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    const markdown = document.getElementById('markdown').value;
    document.getElementById('preview').innerHTML = marked.parse(markdown);
</script>

</html>
