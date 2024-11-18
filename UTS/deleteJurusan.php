<?php

$nim = $_GET['nim'];

include "koneksi.php";
$qry = "DELETE FROM jurusan WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'jurusan.php'</script>";
}else{
    echo "Data gagal dihapus";
}