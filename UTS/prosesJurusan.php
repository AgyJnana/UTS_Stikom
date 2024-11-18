<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Collecting form data
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kode_jurusan = $_POST['kode_jurusan']; // Use proper input name without spaces
    $jurusan = $_POST['jurusan'];
    
    // Include database connection
    include "koneksi.php";
    
    // Prepared statement to prevent SQL injection
    $sql = "INSERT INTO jurusan (nim, nama, kode_jurusan, jurusan) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($sql);  // Prepare the statement
    $stmt->bind_param("ssss", $nim, $nama, $kode_jurusan, $jurusan); // Bind the parameters (all are strings)
    
    // Execute the query
    if($stmt->execute()){
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan: " . $stmt->error;
    }
    
    // Close the statement
    $stmt->close();
}

?>
