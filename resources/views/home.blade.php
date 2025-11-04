<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - MyWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between items-center shadow">
        <h1 class="text-lg font-bold">MyWeb</h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
            <li><a href="#" class="hover:underline">Tentang</a></li>
            <li><a href="#" class="hover:underline">Kontak</a></li>
        </ul>
    </nav>

    {{-- Isi Konten --}}
    <main class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h2 class="text-3xl font-bold mb-4">Selamat Datang di MyWeb!</h2>
        <p class="mb-4">Ini adalah halaman beranda yang dibuat dengan Laravel menggunakan Herd.</p>

        <div class="grid md:grid-cols-3 gap-4 mt-6">
            <div class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2">Fitur 1</h3>
                <p>Deskripsi singkat fitur pertama.</p>
            </div>
            <div class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2">Fitur 2</h3>
                <p>Deskripsi singkat fitur kedua.</p>
            </div>
            <div class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2">Fitur 3</h3>
                <p>Deskripsi singkat fitur ketiga.</p>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="mt-10 bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} MyWeb. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
