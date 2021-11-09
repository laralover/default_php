<?php
echo "zsk<br>";
echo "zsk";
$name="Janusz";
echo '<br>Twoje imię: $name'; //Twoje imię: $name
echo "<br>Twoje imię: $name<br>"; //Twoje imię: Janusz
$x="x";
$y="y";
echo $x.$y; //konkatenacja

//typy danych
//boolean
$prawda=true;
$fałsz=false;
echo $prawda; //1
echo $fałsz; //nic nie wyświetla
//całkowity
$całkowita=10;
$bin=0b1011;
$oct=011;
$hex=0x11;

echo "<hr>$hex<br>";

//zmiennoprzecinkowy
$x=10.5;
echo gettype($x)."<br>"; //double
echo gettype($bin)."<br>"; //int
echo gettype($prawda)."<hr>"; //boolean

//heredoc
$surname="Nowak";
echo <<< E
  Imię i nazwisko:
  Janusz $surname <br>
  Poznań
E;
$text = <<< E
  Imię i nazwisko:
  Janusz $surname <br>
  Poznań
E;
echo $text;

//nowdoc

echo <<< 'E'
  <hr><hr>
  Imię i nazwisko
  Janusz $surname
E;
?>
