<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2>Manajemen Registrasi Peserta Seminar</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Email</th>
                <th>Nama</th>
                <th>Institusi</th>
                <th>Negara</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($registrations as $registration): ?> <!-- Ubah $registration menjadi $registrations -->
            <tr>
                <td><?php echo htmlspecialchars($registration['email']); ?></td>
                <td><?php echo htmlspecialchars($registration['nama']); ?></td>
                <td><?php echo htmlspecialchars($registration['institusi']); ?></td>
                <td><?php echo htmlspecialchars($registration['country']); ?></td>
                <td><?php echo htmlspecialchars($registration['address']); ?></td>
                <td><a href="?delete=<?php echo $registration['id']; ?>" class="btn btn-danger">Hapus</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h3>Tambah Peserta Baru</h3>
    <form action="" method="POST">
        <!-- Formulir tambah peserta -->
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required><br/>
        </div>

        <!-- Tambahkan input lainnya sesuai kebutuhan -->
        
        <button type="submit" class="btn btn-success">Tambah Peserta</button>
    </form>

</div>

<!-- Tambahkan logika PHP untuk menambah peserta baru di sini -->