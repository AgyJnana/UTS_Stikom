<!DOCTYPE html>
<html lang="en">

<head>
    <title>IPK Mahasiswa</title>
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
            color: #0056b3; /* Dark blue for headings */
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
        .btn-warning {
            background-color: #ffc107; /* Yellow for edit button */
        }
        .btn-danger {
            background-color: #dc3545; /* Red for delete button */
        }
    </style>
</head>

<body>
<?php include 'navigasi.php'; ?>
    <div class="container-fluid">
        <div class="container p-5 my-5 bg-dark text-white">
            <h2 style="color: white;">Selamat Datang</h2>
        </div>
        <div class="container p-5 my-5 border border-dark">
            <h2>Input Mahasiswa</h2>
            <form action="prosesIPK.php" method="POST">
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
                    <select name="jurusan" class="form-select" required>
                        <option value="J01">Sistem Komputer</option>
                        <option value="J02">Sistem Informasi</option>
                        <option value="J03">Teknologi Informasi</option>
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="IPK">IPK:</label>
                    <!-- Updated input with validation -->
                    <input type="number" class="form-control" placeholder="Input IPK" name="IPK" min="0" max="4" step="0.01" required>
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
                    <th>IPK</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "koneksi.php";
                    $qry = "SELECT * FROM IPK_mahasiswa";
                    $exec = mysqli_query($con, $qry);

                    while($data = mysqli_fetch_assoc($exec)){
                ?>
                <tr>
                    <td><?= $data['nim'] ?></td>
                    <td><?= $data['nama_mhs'] ?></td>
                    <td><?= $data['kode_jurusan'] ?></td>
                    <td><?= $data['IPK'] ?></td>
                    <td>
                        <a href="editIPK.php?nim=<?= $data['nim'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="deleteIPK.php?nim=<?= $data['nim'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
