<?php
  //date()
  echo "dzień-miesiąc-rok: ".date('d-m-Y').'<br>'; //21-10-2021
  echo date('m-d-y').'<br>'; //
  echo date('d-M-y').'<br>'; //
  echo date('d-F-Y').'<br>'; //

  setlocale(LC_ALL, 'polish');
  echo strftime('%d %B %Y').'<br>';

  echo date('G:i:s').'<br>'; //8:16:42
  echo date('G:i:sa').'<br>'; //8:16:42am
  echo date('H:i:s').'<br>'; //08:16:42
?>
<script>
  setTimeout(function(){
    //window.location.reload();
  }, 1000)
</script>
<?php
// getdate()
$date=getdate();
//echo $date //warning bo to tablica

echo "<pre>";
print_r($date);
echo "</pre>";
echo $date['wday']."<br>"; //4
echo $date['yday']."<br>"; //293

//rok przestępny
echo date('L')."<br>"; //0 - rok nie jest przestępny

// mktime()
$today=mktime(0,0,0,date('m'),date('d'),date('Y'));
echo $today."<br>"; //znacznik czasu, przy getdate tez jest

//ile lat minęło
$year = $today/(60*60*24*365);
echo (int)$year."<br>";

//poprzedni rok
$lastYear=mktime(0,0,0,date('m'),date('d'),date('Y')-1);
$year = $lastYear/(60*60*24*365);
echo (int)$year.'<br>';
?>
