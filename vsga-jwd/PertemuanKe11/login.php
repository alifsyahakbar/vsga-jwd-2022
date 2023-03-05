<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>

    <div style="color:white; position: absolute; left: 510px; top: 120px; font-size: 30px; ">
        ADMIN PERPUSTAKAAN
    </div>
    <div class="container">
        <h1>Login</h1>
        <form action="cek_login.php" method="post">
            <label for="user">Username</label>
            <input type="text" name="user" id="user"><br>
            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass"><br>
            <button type="submit" name="submit">Log in</button>
        </form>
    </div>

</body>

</html>