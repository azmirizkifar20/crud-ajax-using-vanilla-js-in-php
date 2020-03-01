<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = 'ajax';

    $koneksi = mysqli_connect($server, $username, $password, $dbName);

    if (!$koneksi) {
        echo 'Koneksi gagal!';
    }
?>