<?php
    require '../config/koneksi.php';

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO mahasiswa VALUES('', '$nama', '$jurusan', '$nim', '$kelas', '$alamat')";
    mysqli_query($koneksi, $query);
?>