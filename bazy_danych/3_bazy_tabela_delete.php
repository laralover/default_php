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
      require_once './scripts/connect.php';
      $sql = "SELECT `users`.*, `cities`.`city` FROM `users` LEFT JOIN `cities` ON `users`.`cityid` = `cities`.`id`;";
      $result = $connect->query($sql);
      if (isset($_GET['error'])) {
        echo "$_GET[info]<hr>";
      }
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
            <th></th>
          </tr>
  Table;
      while($row = $result->fetch_assoc()) {
        echo <<< ROW
          <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td>$row[city]</td>
            <td><a href="./scripts/delete.php?id=$row[id]">Usuń</a></td>
          </tr>
        ROW;
      }
      echo "</table>";
      $connect->close();
    ?>

  </body>
</html>
