<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <script>
    var username = prompt("Username:");
    var password = prompt("Password:");
    if (username == "petanikode" && password == "kopi") {
      document.write("<h2>Selamat datang pak bos!</h2>");
    } else {
      document.write("<p>Password salah, coba lagi!</p>");
    }
  </script>
</body>

</html>