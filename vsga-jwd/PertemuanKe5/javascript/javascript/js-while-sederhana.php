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
    var ulangi = confirm("Apakah anda mau mengulang?");
    var counter = 0;
    while (ulangi) {
      counter++;
      ulangi = confirm("Apakah anda mau mengulang?");
    }
    document.write("Perulangan sudah dilakuakn sebanyak " + counter + " kali");
  </script>
</body>

</html>