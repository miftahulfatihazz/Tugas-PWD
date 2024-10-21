<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Peserta Seminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2>Registrasi Peserta Seminar</h2>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="institusi" class="form-label">Institusi:</label>
            <input type="text" id="institusi" name="institusi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Negara:</label>
            <input type="text" id="country" name="country" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Alamat:</label>
            <textarea id="address" name="address" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
</body>
</html>