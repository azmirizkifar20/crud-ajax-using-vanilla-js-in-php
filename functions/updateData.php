<?php
    require '../config/koneksi.php';
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $jurusan = $_GET['jurusan'];
    $nim = $_GET['nim'];
    $kelas = $_GET['kelas'];
    $alamat = $_GET['alamat'];

    $query = "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', 
                nim = '$nim', kelas = '$kelas', alamat = '$alamat' WHERE id = $id";
    mysqli_query($koneksi, $query);
?>