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

      var jawab = confirm("Apakah anda mau mengulang?")
      counter++;
      if (jawab == false) {
        ulangi = false;
      }
    }

    document.write("Perulangan sudah dilakukan sebanyak " + counter + " kali")
  </script>
</body>

</html>