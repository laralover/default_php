<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk4bgr1");
      $sql = "SELECT users.*, city.cityName FROM users LEFT JOIN city ON users.city = city.cityid;";
      $result = $connect->query($sql);
      //print_r($row);
      //echo "<br>".$row['name']."<br>";
      echo <<< Table
        <table>
          <tr>
            <th>Id</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data Urodzenia</th>
            <th>Miasto</th>
          </tr>
  Table;
      while($row = $result->fetch_assoc()) {
        echo <<< ROW
          <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td>$row[cityName]</td>
          </tr>
        ROW;
      }
      echo "</table>";
      $connect->close();
    ?>
  </body>
</html>
