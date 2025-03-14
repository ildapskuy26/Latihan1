<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .poster-img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4">
            <h2 class="text-center text-primary">Hasil Pendaftaran</h2>
            <hr>
            <p><strong>Nama:</strong> {{ $data['name'] }}</p>
            <p><strong>Kelas:</strong> {{ $data['class'] }}</p>
            <p><strong>Judul Poster:</strong> {{ $data['poster_title'] }}</p>
            <div class="text-center">
                <p><strong>Poster:</strong></p>
                <img src="{{ asset('storage/' . $data['poster_path']) }}" class="poster-img" alt="Poster">
            </div>
        </div>
    </div>
</body>
</html>