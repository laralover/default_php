<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
      <input type="submit" name="button" value="Oblicz">
    </form>
    <?php
      // if (!empty($_GET['sideA']) && is_numeric($_GET['sideA'])) {
      if (!empty($_GET['sideA'])) {
         //echo $_GET['sideA']."<br>";
        $sideA=str_replace(',', '.', $_GET['sideA']); //str_replace(zbiera argument ze stringa, zamienia go na inny, wypisuje po zmianie)
         //echo $sideA;
        // pole
        $area=$sideA**2;
        // obwód
        $circuit=4*$sideA;
        echo <<< RESULT
          <hr>
          Pole kwadratu wynosi $area cm<sup>2</sup><br>
          Obwód kwadratu wynosi $circuit cm
RESULT;
}else if (isset($_GET['button'])){
        echo "Wypełnij wszystkie pola!";
      }
     ?>
  </body>
</html>
