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
    const angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    // Kita ambil data yang hanya habis dibagi dua saja
    const filteredArray = angka.filter((item) => {
      return item % 2 === 0
    });
    console.log(filteredArray); // -> [2, 4, 6, 8]
  </script>
</body>

</html>