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
    //membuat array
    var products = ["Senter", "Radio", "Antena", "Obeng"];

    document.write("<h3>Daftar Produk:</h3>");
    document.write("<ol>");
    //menggunakan perulangan untuk mencetak semua isi array
    for (let i = 0; i < products.length; i++) {
      document.write(`<li>${ products[i] }/li>`);
    }
    document.write("</ol>");
  </script>
</body>

</html>