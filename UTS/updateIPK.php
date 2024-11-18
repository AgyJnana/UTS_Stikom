<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$IPK = $_POST['IPK'];

include "koneksi.php";

$qry = "UPDATE ipk_mahasiswa SET 
        nama_mhs = '$nama_mhs',
        kode_jurusan = '$jurusan',
        IPK = '$IPK'
        WHERE nim = '$nim'";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil di update'); window.location = 'IPK.php';</script>";
} else {
    echo "Data gagal di simpan";
}
