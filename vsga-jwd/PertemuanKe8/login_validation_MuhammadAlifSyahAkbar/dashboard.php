<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        body {
            margin: 10px;
            padding: 10px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid;
        }

        a {
            display: flex;
            text-decoration: none;
            align-items: center;
            color: skyblue;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Dashboard \</h2>
        <a href="login.php" onclick="return confirm('Anda yakin ingin logout?')">Logout</a>
    </div>
    <h1>Selamat Datang Admin!</h1>


</body>

</html>