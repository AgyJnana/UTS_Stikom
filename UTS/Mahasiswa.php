<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Biodata</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Light blue background */
        }
        h2 {
            color: #white; /* Dark blue for headings */
        }
        .container-fluid {
            margin-top: 20px;
        }
        .table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            background-color: #e6f7ff; /* Light blue background for the table */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            border: 1px solid #d1e7f8; /* Lighter blue borders */
            text-align: center;
            padding: 10px;
        }
        .table th {
            background-color: #0056b3; /* Dark blue for header */
            color: white;
            font-weight: bold;
        }
        .table tr:nth-child(even) {
            background-color: #f0f8ff; /* Alternating row color */
        }
        .table tr:hover {
            background-color: #cce7ff; /* Highlight on hover */
        }
        .btn-primary {
            background-color: #0056b3; /* Dark blue buttons */
            border-color: #0056b3;
        }
        .btn-primary:hover {
            background-color: #003d7a; /* Darker blue on hover */
        }
    </style>
</head>

<body>
<?php include 'navigasi.php'; ?>
    <div class="container-fluid">
        <div class="container p-5 my-5 bg-dark text-white">
            <h2>Selamat Datang</h2>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h2>Input Mahasiswa</h2>
            <form action="proses.php" method="POST">
                <div class="mb-3 mt-3">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" placeholder="Input NIM" name="nim" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" placeholder="Input Nama" name="nama" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="jurusan">Jurusan:</label>
                    <select name="jurusan" class="form-select">
                        <option value="J01">Sistem Komputer</option>
                        <option value="J02">Sistem Informasi</option>
                        <option value="J03">Teknologi Informasi</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="gender">Gender:</label><br>
                    <input class="form-check-input" type="radio" name="gender" value="1">
                    <label class="form-check-label">Laki-Laki</label>
                    <input class="form-check-input" type="radio" name="gender" value="0">
                    <label class="form-check-label">Perempuan</label>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" placeholder="Input Alamat" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp">No HP:</label>
                    <input type="text" class="form-control" placeholder="Input No HP" name="no_hp" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" placeholder="Input Email" name="email" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>

        <h2>Data Mahasiswa</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama Mhs</th>
                    <th>Jurusan</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "koneksi.php";
                    $qry = "SELECT * FROM mahasiswa";
                    $exec = mysqli_query($con, $qry);

                    while($data = mysqli_fetch_assoc($exec)){
                ?>
                <tr>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama_mhs'] ?></td>
                    <td><?= $data['kode_jurusan'] ?></td>
                    <td><?= $data['gender']?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['no_hp'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td>
                        <a href="edit.php?nim=<?= $data['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?nim=<?= $data['nim'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
