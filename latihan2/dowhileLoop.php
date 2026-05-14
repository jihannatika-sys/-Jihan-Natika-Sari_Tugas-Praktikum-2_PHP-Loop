
<h1>pengulangan do while</h1>
<?php
//pengulangan dowhileLoop//
$counter = 0;

do{
    echo "hitung ke -".$counter . "<br>";
    $counter++;

} while($counter <= 5);
?>

<h1>hitungan dari 8 </h1>
<?php  
$counter = 8;

do {
  echo $counter;
  $counter++;
} while ($counter < 11);
?>

<h1>break PHP</h1>
<?php
$counter = 1;

do {
  if ($counter == 10) break;
  echo $counter;
  $counter++;
   echo"<br>";
} while ($counter < 6);
?>

<h1>continue PHP</h1>
<?php  
$i = 0;

do {
  $counter++;
  if ($counter == 5) continue;
  echo $counter;
} while ($counter < 10);
?>