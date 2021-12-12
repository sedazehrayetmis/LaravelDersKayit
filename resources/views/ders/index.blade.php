<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders Kayıt</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="text-4xl font-bold mb-4">Dersler</h1>

        <a href="/ders/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Yeni Ders Ekle</a>

        @foreach($ders as $ders)
            <article class="mb-2">
                <a href="/ders/{{ $ders->id }}/edit" class="text-xl font-bold text-blue-500">Dersin Kodu:{{ $ders->CODE }}</a>
                <p class="text-md text-gray-600">Dersin Adı   :{{ $ders->NAME }}</p>
                <p class="text-md text-gray-600">Ders Durumu  :{{ $ders->ISMANDATORY }}</p>
                <p class="text-md text-gray-600">Dersin Günü  :{{ $ders->DAY }}</p>
                <p class="text-md text-gray-600">Dersin Saati :{{ $ders->HOUR }}</p>
                <hr class="mt-2">
            </article>
        @endforeach
    </div>
</body>
</html>
