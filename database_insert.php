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
      require_once './connect.php';
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
      echo "</table><br>";

      if (isset($_GET['addUser'])) {
        echo <<< FORMADDUSER
          <h4>Dodawanie użytkownika</h4>
          <form action="./addUser.php" method="post">
            <input type="text" name="name" placeholder="Podaj imię"><br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
            <input type="date" name="birthday">Data Urodzenia<br><br>
            <select name="cityid">
FORMADDUSER;
        
          $sql = "select * from cities";
          $result=$connect->query($sql);
          while($city=$result->fetch_assoc()){
              echo "<option value=\"$city[id]\">$city[city]</option>";
          }
          
            echo <<<FORMADDUSER
            </select>
            <input type="submit" value="Dodaj użytkownika"><br><br>
          </form>
FORMADDUSER;
      }
      else{
        echo '<a href="./database_insert.php?addUser=">Dodaj użytkownika</a>';
      }
      $connect->close();
    ?>

      
  </body>
</html>