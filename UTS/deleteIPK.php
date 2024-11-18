<?php

$nim = $_GET['nim'];

include "koneksi.php";
$qry = "DELETE FROM ipk_mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil dihapus'); window.location = 'IPK.php'</script>";
}else{
    echo "Data gagal dihapus";
}