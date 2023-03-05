<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login | Pertemuan ke-7</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="formLogin">

        <?php
        if (isset($_GET['cek'])) {
            if ($_GET['cek'] == 'salah') {
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
    </div>

    <script src="js/javascript.js"></script>
</body>

</html>