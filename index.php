<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
            <h2 align="center" style="margin: 30px;">Data Mahasiswa</h2>
            <!-- isinya id -->
            <input type="hidden" id="id" />

            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" id="nama" class="form-control" required="true" />
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" id="jurusan" class="form-control" required="true" />
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" id="nim" class="form-control" required="true" />
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Kelas</label>
                        <input type="text" id="kelas" class="form-control" required="true" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea id="alamat" class="form-control" required="true"></textarea>
            </div>

            <div class="form-group float-left">
                <button id="button" onclick="buttonAction()" class="btn btn-primary">Simpan</button>
            </div>

            <div class="col-3 float-right" style="padding: 0;">
                <input type="text" id="keyword" class="form-control" placeholder="Cari data disini" />
            </div>
            <br /><br />

            <hr />

            <div class="data"></div>
        </div>

    <div id="tampilkan"><?php include 'tampil.php' ?></div>

    <script src="js/ajax.js"></script>
</body>
</html>