<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script>
    function Person(firstName, lastName) {
      // properti
      this.firstName = firstName;
      this.lastName = lastName;

      // method
      this.fullName = function() {
        return "${this.firstName} ${this.lastName}"
      }
      this.showName = function() {
        document.write(this.fullName());
      }
    }

    var person1 = new Person("Muhar", "Dian");
    var person2 = new Person("Petani", "Kode");
    person1.showName();
    document.write("<br>");
    person2.showName();
  </script>
</head>

<body>


  </script>
  </head>

  <body>

  </body>

</html>