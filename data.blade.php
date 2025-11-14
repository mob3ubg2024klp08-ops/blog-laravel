<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Input MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

    <h2 class="mb-3">Input Data</h2>

    <form action="{{ route('data.store') }}" method="POST" class="mb-4">
        @csrf
        <input type="text" name="item" class="form-control w-50 d-inline-block" placeholder="Masukkan data..." required>
        <button class="btn btn-primary">Tambah</button>
    </form>

    <h4>Daftar Data:</h4>
    <ul class="list-group mb-3 w-50">
        @foreach($items as $i)
            <li class="list-group-item">{{ $i }}</li>
        @endforeach
    </ul>

    <h4>Total Data: <strong>{{ $jumlah }}</strong></h4>

</body>
</html>
