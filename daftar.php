<!doctype html>
<html lang="en">

<?php
require 'koneksi.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Siaga Gunung Meletus</title>
    <link rel="icon" href="images/icongunungnobg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<!-- navbar -->
<?php include 'navbar.php'; ?>
<!-- akhir navbar -->

<body>
    <div class="container mt-4">
        <div class="text-center ">
            <h2>Daftar Orang Hilang</h2>
        </div>

        <table class="table table-sm table-primary align-item-center text-center mt-4">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Handphone</th>
                <th>Status</th>
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
                    </tr>

                <?php $no++;
                } ?>
            <?php endforeach ?>
        </table>

        <a href="tambahdata.php" class="btn btn-primary ">Tambah Data Orang Hilang</a>
    </div>
</body>

</html>