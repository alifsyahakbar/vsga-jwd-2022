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
    //kita punya array seperti berikut 
    var days = ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];

    //Kemudian kita tampilkan semua hari
    // dengan menggunakan method foreach
    days.forEach((day) => {
      document.write("<p>" + day + "</P>");
    });
  </script>
</body>

</html>