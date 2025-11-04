<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postingan - MyWeb</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between items-center shadow">
        <h1 class="text-lg font-bold">MyWeb</h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
            <li><a href="{{ route('post') }}" class="hover:underline">Post</a></li>
        </ul>
    </nav>

    {{-- Konten --}}
    <main class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h2 class="text-3xl font-bold mb-4">Daftar Postingan</h2>
        <p class="mb-6 text-gray-700">Berikut adalah contoh daftar postingan sederhana.</p>

        <div class="grid md:grid-cols-2 gap-6">
            {{-- Postingan 1 --}}
            <article class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2 text-blue-700">Post 1: Belajar Laravel</h3>
                <p class="text-gray-700 mb-2">
                    Laravel adalah framework PHP modern yang mempermudah pengembangan aplikasi web.
                </p>
                <a href="#" class="text-blue-600 hover:underline font-medium">Baca selengkapnya →</a>
            </article>

            {{-- Postingan 2 --}}
            <article class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2 text-blue-700">Post 2: Apa Itu Herd?</h3>
                <p class="text-gray-700 mb-2">
                    Herd adalah tool lokal untuk menjalankan Laravel dengan cepat tanpa setup rumit.
                </p>
                <a href="#" class="text-blue-600 hover:underline font-medium">Baca selengkapnya →</a>
            </article>

            {{-- Postingan 3 --}}
            <article class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2 text-blue-700">Post 3: TailwindCSS untuk Desain</h3>
                <p class="text-gray-700 mb-2">
                    TailwindCSS membantu kamu membuat tampilan cantik tanpa menulis CSS panjang.
                </p>
                <a href="#" class="text-blue-600 hover:underline font-medium">Baca selengkapnya →</a>
            </article>

            {{-- Postingan 4 --}}
            <article class="p-4 border rounded shadow hover:bg-blue-50 transition">
                <h3 class="text-xl font-semibold mb-2 text-blue-700">Post 4: MVC di Laravel</h3>
                <p class="text-gray-700 mb-2">
                    Pola Model-View-Controller membuat kode Laravel lebih terstruktur dan rapi.
                </p>
                <a href="#" class="text-blue-600 hover:underline font-medium">Baca selengkapnya →</a>
            </article>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="mt-10 bg-gray-200 py-4 text-center">
        <p>&copy; 2301010029/2301010033 </p>
    </footer>

</body>
</html>
