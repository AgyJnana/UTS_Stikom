<?php

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];

    include "koneksi.php";
    $sql = "INSERT INTO mahasiswa VALUES ('$nim','$nama','$jurusan','$gender','$alamat','$no_hp','$email')";

    $exec = mysqli_query($con, $sql)  or die(mysqli_error($con));
    
    if($exec){
        echo "Data berhasil disimpan";
    }else{
        echo "Data gagal disimpan";
    }

}