<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - MyWeb wirahadi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between items-center shadow">
        <h1 class="text-lg font-bold">MyWeb</h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
            <li><a href="{{route('post')}}" class="hover:underline">post</a></li>
            <li><a href="{{route('Tentang')}}" class="hover:underline">Tentang</a></li>
        </ul>
    </nav>
    <h1>nama : wirahadi saputra</h1>
    <h2>nim : 2301010029</h2>

    {{-- Isi Konten --}}
    <main class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h2 class="text-3xl font-bold mb-4 text-blue-700">di buat oleh wirahadi?2301010029</h2>
        <p class="mb-6">Ini adalah halaman beranda yang dibuat dengan Laravel menggunakan Herd.</p>

        {{-- Gambar Otomatis --}}
        <div class="w-full mb-10">
            <img src="https://picsum.photos/1200/400?random={{ rand(1, 100) }}" 
                 alt="Gambar Otomatis" 
                 class="rounded-lg shadow-lg w-full object-cover">
        </div>

        {{-- Daftar Fitur --}}
        <div class="grid md:grid-cols-3 gap-6 mt-6">
            <div class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <img src="https://picsum.photos/400/250?random=1" alt="Fitur 1" class="rounded mb-3 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2">Fitur 1</h3>
                <p>Deskripsi singkat fitur pertama.</p>
            </div>
            <div class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <img src="https://picsum.photos/400/250?random=2" alt="Fitur 2" class="rounded mb-3 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2">Fitur 2</h3>
                <p>Deskripsi singkat fitur kedua.</p>
            </div>
            <div class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <img src="https://picsum.photos/400/250?random=3" alt="Fitur 3" class="rounded mb-3 w-full h-40 object-cover">
                <h3 class="text-xl font-semibold mb-2">Fitur 3</h3>
                <p>Deskripsi singkat fitur ketiga.</p>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="mt-10 bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} 2301010029 / 2301010033. .</p>
    </footer>

</body>
</html>
