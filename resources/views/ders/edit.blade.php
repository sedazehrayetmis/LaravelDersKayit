<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="/ders/{{ $ders->id }}">
            @method('PUT')
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Ders Kodu: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full 
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                 id="title" name="title" value="{{ $ders->CODE }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Dersin Adı: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full
                 text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" 
                 id="content" name="content" value="{{ $ders->NAME }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Zorunlu mu ?: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full 
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" 
                id="content" name="content" value="{{ $ders->ISMANDATORY }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Dersin Günü: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full 
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" 
                id="content" name="content" value="{{ $ders->DAY }}">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Dersin Saati: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full 
                text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" 
                id="content" name="content" value="{{ $ders->HOUR }}">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Güncelle</button>
            <a href="/ders" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Vazgeç</a>

            <form action="/ders/{{ $ders->id }}">
                @csrf
                @method('DELETE')

                <button class="ml-4 bg-red-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Sil</button>
            </form>
        </form>
    </div>
</body>
</html>
