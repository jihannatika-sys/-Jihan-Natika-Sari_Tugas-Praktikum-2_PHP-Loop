<br><h2>Penaikan Variabel Penghitung</h2>
<?php  
for ($gol = 0; $gol <= 10; $gol++) {
  echo "Angkanya adalah : $gol <br>";
}
?>

<br><h2>Penurunan Variabel Penghitung</h2>
<?php  
for ($menit = 10; $menit >= 0; $menit--) {
  echo "Angkanya adalah: $menit <br>";
}
?>

<br><h2>PHP break Statement</h2>
<?php  
for ($menit = 0; $menit <= 10; $menit++) {
  if ($menit == 3) break;
  echo "The number is: $menit <br>";
}
?>  

<br><h2>PHP continue Statement</h2>
<?php  
for ($menit = 0; $menit <= 10; $menit++) {
  if ($menit == 3) continue;
  echo "The number is: $menit <br>";
}
?> 


<h1>For Sintaks Alternatif</h1>
<?php
for ($menit = 1; $menit <= 5; $menit++):
    if ($menit == 3) continue;
    echo "Angka ke-$menit <br>";
endfor;
?>

<br><h2>percobaan</h2>
<?php  
for ($menit = 0; $menit <= 200; $menit+=5) {
  echo "The number is: $menit <br>";
}
?>