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
    var nilai = prompt("input nilai", 0);
    var grade = "";

    switch (true) {
      case nilai > 90:
        grade = "A";
        break;
      case nilai > 80:
        grade = "B+";
        break;
      case nilai > 70:
        grade = "B";
        break;
      case nilai > 60:
        grade = "C+";
        break;
      case nilai > 50:
        grade = "C";
        break;
      case nilai > 40:
        grade = "D";
        break;
      case nilai > 30:
        grade = "E";
        break;
      default:
        grade = "F";
    }

    document.write("<h2>Grade Anda : " + grade + "</h2>");
  </script>
</body>

</html>