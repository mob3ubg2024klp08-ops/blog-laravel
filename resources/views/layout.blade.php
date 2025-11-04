<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyWeb')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-blue-600 text-white px-6 py-3 flex justify-between items-center shadow">
        <h1 class="text-lg font-bold">MyWeb</h1>
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="hover:underline">Beranda</a></li>
            <li><a href="{{ route('post') }}" class="hover:underline">Post</a></li>
            <li><a href="#" class="hover:underline">Tentang</a></li>
            <li><a href="#" class="hover:underline">Kontak</a></li>
        </ul>
    </nav>

    {{-- Konten Halaman --}}
    <main class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="mt-10 bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} 2301010029 / 2301010033</p>
    </footer>

</body>
</html>
