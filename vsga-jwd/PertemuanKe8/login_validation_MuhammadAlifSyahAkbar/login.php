<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login VSGA-JWD </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="formLogin">
        <div class="title">
            <h4>Selamat Datang!</h4>
            <h2>Login <span style="color: blue;"> VSGA</span>2022-JWD</h2>
        </div>

        <?php
        if (isset($_GET['cek'])) {
            if ($_GET['cek'] == 'kosong') {
                echo '<div class="alert">
                Email atau Password Tidak boleh Kosong !
            </div>';
            } else if ($_GET['cek'] == 'salah') {
                echo '<div class="alert">
                Email atau Password Salah !
            </div>';
            }
        }
        ?>

        <form action="validasi.php" method="post">
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="" class="form-control"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" value="" class="form-control"><br>
            <button name="login" class="btn-info">Login</button>
        </form>
        <hr style="margin-top: 20px;">
        <a href="#">Belum punya Akun?</a>
    </div>

    <script src="js/javascript.js"></script>
</body>

</html>