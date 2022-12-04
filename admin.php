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

<!-- navbar -->
<?php include 'navbaradmin.php'; ?>
<!-- akhir navbar -->

<main>
    <div class="main-item container border-bottom">
        <div class="row align-items-center pt-4">
            <div class="col-auto text-gray-500 font-weight-light">
                <h3><b>Halaman Admin</b></h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center mt-5">
            <h2>Daftar Orang Hilang</h2>
        </div>

        <table class="table table-sm table-primary align-item-center text-center mt-4">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Handphone</th>
                <th>Status</th>
                <th>Menu</th>
            </tr>

            <?php
            $hilang = mysqli_query($konek, "SELECT * FROM hilang") or die(mysqli_error($konek));

            $no = 1;
            $total = mysqli_num_rows($hilang);
            foreach ($hilang as $row) : {
            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $row["nama"] ?></td>
                        <td><?= $row["alamat"] ?></td>
                        <td><?= $row["telp"] ?></td>
                        <td>
                            <?php
                            if ($row['status'] == "1") {
                                echo "<div class='text-danger' role='status'>
                                                    <span class='visually'>Hilang</span>
                                                </div>";
                            } else if ($row['status'] == "2") {
                                echo "<div class='text-success' role='status'>
                                                    <span class='visually'>Ditemukan</span>
                                                </div>";
                            }
                            ?>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="basic example">
                                <a href="tambahdata.php?id=<?= $row['id']; ?>" class="btn btn-info">Edit</a>
                                <a href="funct.php?id=<?= $row['id']; ?>" class="btn btn-warning" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                            </div>
                        </td>
                    </tr>

                <?php $no++;
                } ?>
            <?php endforeach ?>
        </table>

        <a href="tambahdata.php" class="btn btn-primary ">Tambah Data Orang Hilang</a>
        <?php
        if (@$_GET['tambah'] == 'sukses') {
            $color = 'success';
            $msg = 'Data Anggota berhasil di tambah';
        } elseif (@$_GET['update'] == 'sukses') {
            $color = 'info';
            $msg = 'Data Anggota berhasil di ubah';
        } elseif (@$_GET['delete'] == 'sukses') {
            $color = 'danger';
            $msg = 'Data Anggota berhasil di hapus';
        } else {
            $msg = '';
        }
        ?>


    </div>

    <body>

    </body>

</html>