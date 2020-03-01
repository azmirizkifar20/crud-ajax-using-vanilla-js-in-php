<?php
    require 'config/koneksi.php';
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query);
    $no = 1;
?>

<table class="table table-striped table-bordered" style="width:81%; margin:auto">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result as $data) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['jurusan'] ?></td>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td>
                <button class="btn btn-danger btn-sm" onclick="deleteData(<?= $data['id'] ?>)">hapus</button>
                <button class="btn btn-success btn-sm" onclick="showUpdate(this.value)" value='<?= json_encode($data) ?>'>edit</button>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>