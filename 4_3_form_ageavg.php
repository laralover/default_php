<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
      <?php
      if (isset($_GET['home'])) {
        echo 'Witaj ponownie!';
      }
        if (!isset($_POST['person']) && !isset($_POST['buttonAvg'])){
          echo <<< FORMCOUNTPERSON
          <h3>Ilość osób w rodzinie</h3>
          <form method="post">
            <input type="number" name="person" placeholder="Ilość osób"><br><br>
            <input type="submit" value="Zatwierdź"><hr>
          </form>
FORMCOUNTPERSON;
        }

        if (!empty($_POST['person'])) {
          echo "<h3>Ilość osób w rodzinie: $_POST[person]</h3>";
          echo <<< FORMCOUNTPERSON
            <form method="post">
FORMCOUNTPERSON;
              for ($i=1; $i <= ($_POST['person']); $i++) {
                echo "<input type='number' name='person$i' placeholder='Wiek osoby nr $i'><br><br>";
              }
          echo <<< FORMCOUNTPERSON
            <input type="submit" name="buttonAvg" value="Zatwierdź">
          </form>
FORMCOUNTPERSON;
        }
        if (isset($_POST['buttonAvg'])) {
          echo "<h3>Średni wiek</h3>";
          //print_r($_POST);
          $avg=0;
          $count=0;
          foreach ($_POST as $key => $value) {
            //echo "$key: $value<br>";
            if ($key != 'buttonAvg') {
              $avg=$avg+$value;
              $count++;
            }
          }
          echo "Średni wiek wynosi: ".number_format($avg/$count, 2)." lat<hr>";
        }
        echo '<a href="./4_3_form_ageavg.php?home=">Strona główna</a>';
      ?>

  </body>
</html>
