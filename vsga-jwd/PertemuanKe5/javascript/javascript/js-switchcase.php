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
    var jawab = prompt("Kamu beruntung! silahkan pilh hadiahmu dengan memasukkan angka 1 - 5 ");
    var hadiah = "";

    switch (jawab) {
      case "1":
        hadiah = "Tisu";
        break;
      case "2":
        hadiah = "1 Kotak Kopi";
        break;
      case "3":
        hadiah = "Sticker";
        break;
      case "4":
        hadiah = "Minyak Goreng";
        break;
      case "5":
        hadiah = "Uang Rp. 50.000";
        break;
      default:
        document.write("<p>Opps! anda salah pilih</p>");
    }

    if (hadiah === "") {
      document.write("<p>Kamu gagal mendapat hadiah</p>");
    } else {
      document.write("<h2>Selamat kamu mendapatkan" + hadiah + "</h2>");
    }
  </script>
</body>

</html>