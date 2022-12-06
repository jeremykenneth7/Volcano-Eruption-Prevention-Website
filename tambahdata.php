<!doctype html>
<html lang="en">

<?php
require 'koneksi.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Siaga Gunung Meletus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container" style="margin-top: 50px;">
            <div class="card-body">
                <h1 class="text-center mb-5">Tambah Data Orang Hilang</h1>
                <div class="border-bottom mt-3 mb-5"></div>
                <?php
                if (@$_GET['id']) {
                    $id = $_GET['id'];
                    $query = mysqli_query($konek, "SELECT * FROM hilang WHERE id = '$id'");
                    $hilang = mysqli_fetch_array($query);
                }              
                ?>
                <form action="funct.php" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" value="<?= @$hilang['nama']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" value="<?= @$hilang['alamat']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="telp">Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="telp" value="<?= @$hilang['telp']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3 ">
                        <label class="col-sm-2 col-form-label" for="Status">Status</label>
                        <div class="col-sm-10 alert alert-info">
                            <select class="form-control" name="status" required="required">
                                <option <?php if (@$hilang['status'] == "1") {
                                            echo "selected='selected'";
                                        } ?> value="1">Hilang</option>
                                <option <?php if (@$hilang['status'] == "2") {
                                            echo "selected='selected'";
                                        } ?> value="2">Ditemukan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="telp"></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="hidden" name="id" value="<?= @$hilang['id']; ?>">
                            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                        </div>
                </form>
            </div>

        </div>
    </main>
    <br><br><br><br><br>

</body>

</html>