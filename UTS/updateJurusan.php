<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kode_jurusan = $_POST['kode_jurusan'];
$jurusan = $_POST['jurusan'];


include "koneksi.php";

$qry = "UPDATE jurusan SET 
        nama = '$nama',
        kode_jurusan = '$kode_jurusan',
        jurusan = '$jurusan'
        WHERE nim = '$nim'";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil di update'); window.location = 'jurusan.php';</script>";
} else {
    echo "Data gagal di simpan";
}