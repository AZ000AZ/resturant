<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim | Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="max-w-2xl mx-auto p-8 bg-white mt-12 shadow-md rounded-lg">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">📞 Bize Ulaşın</h1>

    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-3 mb-4 rounded border border-green-300">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-3 mb-4 rounded border border-red-300">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('iletisim') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700 font-semibold">Adınız</label>
            <input type="text" name="ad" class="w-full mt-1 p-2 border border-gray-300 rounded" value="{{ old('ad') }}" required>
        </div>

        <div>
            <label class="block text-gray-700 font-semibold">E-posta</label>
            <input type="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded" value="{{ old('email') }}" required>
        </div>

        <div>
            <label class="block text-gray-700 font-semibold">Mesajınız</label>
            <textarea name="mesaj" rows="5" class="w-full mt-1 p-2 border border-gray-300 rounded" required>{{ old('mesaj') }}</textarea>
        </div>

        <button type="submit" class="w-full bg-red-600 text-white font-semibold py-2 px-4 rounded hover:bg-red-700">
            Gönder ✉️
        </button>
    </form>
</div>

</body>
</html>
