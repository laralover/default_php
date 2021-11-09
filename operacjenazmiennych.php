<?php
echo PHP_VERSION; //wersja
echo "<br>";
echo 2**10,"<br>"; //1024; "," interpolacja

$x=100;
$y=10;
echo $x<=>$y,"<br>"; //porównanie

//równe
$x=1;
$y=1.0;

echo gettype($x)."<br>"; //int
echo gettype($y)."<br>"; //double


//sprawdzenie wartości
if ($x==$y) {
  echo "Równe<br>";
}
else{
  echo "Różne<br>";
}

//identyczne (sprawdzenie wartości i typu danych)
if ($x===$y) {
  echo "Identyczne<br>";
}
else{
  echo "Różne<br>";
}

/*
  postinkrementacja $x++
  preinkrementacja  ++$x
  postdekrementacja $x--
  predekrementacja  --$x
*/

$x=10;
$x++;
echo $x."<br>"; //11
$x = $x++;
echo $x."<br>"; //11
$y = $x++;
echo $x."<br>"; //12
echo $y."<br>"; //11
$x=--$x;
echo $x."<br>";

//Zadanie
$x=1;
echo $x."<br>"; //1
$x=$x++;
echo $x."<br>"; //1
$x=++$x;
echo $x."<br>"; //2
$y=++$x;
echo $x."<br>"; //2
echo $y."<br>"; //3
$y=$x++;
echo $x."<br>"; //4
echo $y."<br>"; //3

?>
