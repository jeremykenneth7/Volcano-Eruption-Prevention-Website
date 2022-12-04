<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Siaga Gunung Meletus</title>
    <link rel="icon" href="images/icongunungnobg.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Assistant&family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<style>
    .container {
        padding-top: 50px;
        padding-bottom: 50px;
        margin-top: 150px;

        border-radius: 20px;
        backdrop-filter: blur(20px);
        box-shadow: 0 1px 12px rgba(0, 0, 0, 0.25);
    }
</style>

<body>
    <?php
    if (@$_GET['msg'] == 'kosong') {
        $color = 'warning';
        $msg = 'Maaf user dan password tidak boleh kosong';
    } elseif (@$_GET['msg'] == 'sukses') {
        $color = 'success';
        $msg = 'Selamat Anda Berhasil log in';
    } elseif (@$_GET['msg'] == 'gagal') {
        $color = 'danger';
        $msg = 'Maaf Username atau Password anda salah';
    } else {
        $msg = '';
        $color = '';
    }
    ?>

    <div class="container col-sm-6">
        <div class="row justify-content-center">
            <div class="col text-center text-dark">
                <h2 class="judul">Login Admin</h2><br>
            </div>

            <form action="cek_login.php" method="post" class="box">
                <div class="login-area">

                    <div class="form-group">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="user" name="user" placeholder="Username" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row mb-3 justify-content-center">
                            <div class="col-sm-6">
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" name="submit" class="btn button btn-lg btn-primary ">Sign In</button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>