<br><h2> Foreach PHP pada Array Terindeks</h2>
<?php  
$tim_bola = array("Real Madrid", "Manchester City", "Liverpool", "Persija"); 

foreach ($tim_bola as $nama_tim) {
  echo "Tim favorit saya adalah: $nama_tim <br>";
}
?>  

<br><h2> Foreach PHP pada Array Asosiatif</h2>
<?php
$tugas_mahasiswa = array("Struktur Data" => "Selesai", 
    "Basis Data" => "Proses", 
    "Pemrograman Web" => "Belum");

foreach ($tugas_mahasiswa as $matkul => $status) {
  echo "Mata Kuliah <b>$matkul</b> statusnya: <b>$status</b> <br>";
}
?>


<br><h2> foreach PHP  pada Objek</h2>
<?php
class Tugas {
  public $NamaTugas;
  public $Prioritas;
  public $Deadline;

  public function __construct($nama, $level, $waktu) {
    $this->NamaTugas = $nama;
    $this->Prioritas = $level;
    $this->Deadline = $waktu;
  }
}

$tugasBaru = new Tugas("Sistem Backend", "Tinggi", "Besok");
foreach ($tugasBaru as $properti => $isi) {
  echo "$properti: $isi <br>";
}
?>

<br><h2> break  php (Berhenti di Blue)</h2>
<?php
$warna = array("red", "green", "blue", "yellow");

foreach ($warna as $value) {
  if ($value == "blue") break;
  echo "$value<br>";
}
?>

<br><h2>Continue PHP (Lompati Blue)</h2>
<?php
foreach ($warna as $value) {
  if ($value == "blue") continue;
  echo "$value<br>";
}
?>

<br><h2> Foreach Loop Byref  php</h2>
<br><h2>Foreach Tanpa Referensi (Data Asli Tidak Berubah)</h2>
<pre>
<?php
$klub = array("Real Madrid", "Man City", "Liverpool", "Persija");

foreach ($klub as $x) {
  if ($x == "Liverpool") $x = "Barcelona";
}
var_dump($klub); 
?>
</pre>

<br><h2>Foreach Dengan Referensi (Data Asli Berubah)</h2>
<pre>
<?php
foreach ($klub as &$x) {
  if ($x == "Liverpool") $x = "Barcelona";
}
var_dump($klub); 
?>
</pre>

<br><h2> Sintaksis Alternatif  php</h2>
<?php
$anime_list = array("Naruto", "One Piece", "Blue Lock", "Haikyuu");

foreach ($anime_list as $anime) :
  echo "Judul Anime: $anime <br>";
endforeach;
?>