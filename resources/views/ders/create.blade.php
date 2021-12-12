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
        <form method="POST" action="/ders">
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="CODE">Dersin Kodu: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="CODE" name="CODE">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="NAME">Dersin Adı: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="NAME" name="NAME">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="ISMANDATORY">Zorunlu mu?: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="ISMANDATORY" name="ISMANDATORY">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="DAY">Dersin Günü: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="DAY" name="DAY">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="HOUR">Dersin Saati: </label>
                <input class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="HOUR" name="HOUR">
            </div>

            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Kaydet</button>
            <a href="/ders" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Vazgeç</a>
        </form>
    </div>
</body>
</html>
