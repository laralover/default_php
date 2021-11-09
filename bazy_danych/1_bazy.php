<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk4bgr1");
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);
      //print_r($row);
      //echo "<br>".$row['name']."<br>";
      while ($row = $result->fetch_assoc()) {
        echo<<<ROW
        Id: $row[id]
        <br>
        Imie: $row[name]
        <br>
        Nazwisko: $row[surname]
        <br>
        Data urodzenia: $row[birthday]
        <hr>
ROW;
      }
      $connect->close();
    ?>
  </body>
</html>
