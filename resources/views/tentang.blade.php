<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - MyWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 text-gray-900">

    {{-- Navbar --}}
    <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between items-center shadow">
        <h1 class="text-lg font-bold">MyWeb</h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
            <li><a href="{{ route('post') }}" class="hover:underline">Post</a></li>
            <li><a href="/tentang" class="hover:underline font-bold">Tentang</a></li>

        </ul>
    </nav>

    {{-- Section Tentang --}}
    <section class="max-w-5xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">

        <h2 class="text-3xl font-bold mb-6 text-blue-700">Tentang Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

            {{-- Gambar --}}
            <div>
                <img src="https://picsum.photos/500/400?random=20"
                     alt="Foto Tentang"
                     class="rounded-lg shadow-lg w-full object-cover">
            </div>

            {{-- Isi --}}
            <div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">Siapa Kami?</h3>

                <p class="text-gray-700 leading-relaxed mb-4">
                    Kami adalah tim pengembang web yang berfokus pada pembuatan website modern,
                    responsive, dan cepat menggunakan Laravel, TailwindCSS, dan teknologi terbaru.
                </p>

                <p class="text-gray-700 leading-relaxed">
                    Website ini dikembangkan oleh:
                </p>

                <ul class="mt-3 text-gray-800">
                    <li>✔ <b>Wirahadi Saputra</b> — 2301010029</li>
                    <li>✔ <b>M.Khutbi Albayani</b> — 2301010033</li>
                </ul>
            </div>

        </div>
    </section>

    {{-- Footer --}}
    <footer class="mt-10 bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} 2301010029 / 2301010033</p>
    </footer>

</body>
</html>
