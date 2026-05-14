<br><h2> while php</h2>
<?php  
$hitung = 1;

while ($hitung < 6) {
  echo $hitung;
  $hitung++;
} 
?>  

<br><h2> break  php</h2>
<?php
//pengulangan latt//
$hitung = 1 ;
while ($hitung<10){
    if($hitung == 5) break;
    echo "angka - ".$hitung;
    echo"<br>";
    $hitung++;
}
?>

<br><h2>continue PHP</h2>

<?php
$hitung = 0;
while ($hitung < 6) {
  $hitung++;
  if ($hitung == 3) continue;
  echo $hitung;
   echo "<br>";
}
?>

<br><h2>Sintaksis Alternatif</h2>
<?php
$hit = 0;
while( $hit < 10):
    if($hit == 10) continue;
$hit++;
echo "$hit<br>";
endwhile;
?>

<br><h2>percobaan</h2>
<?php  
$hit = 0;

while ($hit < 100) {
  $hit+=10;
  echo "kelipatan - ".$hit;
  echo "<br>";
}
?>