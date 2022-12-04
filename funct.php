<?php
    require 'koneksi.php';

    $nama = @$_POST['nama'];
    $alamat = @$_POST['alamat'];
    $telp = @$_POST['telp'];
    $status = $_POST['status'];

    if(@$_POST['id'])
    {
        $id = $_POST['id'];

        $query = "UPDATE hilang SET nama='$nama', alamat='$alamat', telp='$telp', status='$status'  WHERE id = '$id'";
        mysqli_query($konek, $query) or die('error');
        header("location:admin.php?update=sukses");
    }
    elseif(@$_GET['id'])
    {
        $id = $_GET['id'];
        mysqli_query($konek, "DELETE FROM hilang WHERE id = '$id'") or die(mysqli_error($konek));

        header("location: admin.php?delete=sukses");
    }
    else {

        $query = "INSERT INTO hilang(nama , alamat, telp, status) VALUES ('$nama', '$alamat', '$telp', '$status')";
        mysqli_query($konek, $query) or die('error');

        header("location: daftar.php?tambah=sukses");
    }
