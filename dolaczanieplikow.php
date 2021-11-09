<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dołączanie plików</title>
  </head>
  <body>
    <h3>Początek strony</h3>
      <?php
        include './3_1.php';
        include_once './3_1.php';
        //include './3_1.php1'; błędna składnia
        require './3_1.php';
        require_once './3_1.php';
      ?>
    <h3>Koniec strony</h3>
  </body>
</html>
