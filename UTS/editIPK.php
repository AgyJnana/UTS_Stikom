<?php
$nim = $_GET['nim'];
include "koneksi.php";

$qry = "SELECT * FROM ipk_mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>

<form action="updateIPK.php" method="POST">
        <fieldset>
            <legend>Form edit data mahasiswa</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['nim'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama_mhs'] ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>IPK</td>
                    <td>:</td>
                    <td><input type="text" name="IPK" value="<?= $data['IPK'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
