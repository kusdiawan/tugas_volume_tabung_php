<?php
$jari2 = 10;
$tinggi = 30;
const phi = 22/7;

function luas_lingkaran($jari2){
  return phi * $jari2 * $jari2;
}

function volume_tabung($tinggi, $jari2){
  return round($tinggi*luas_lingkaran($jari2),2);
}

echo "<br> <h4>Tugas menghitung Volume Tabung</h4>";
echo "<br> Jadi Volume tabung tersebut adalah : ", number_format(volume_tabung($tinggi, $jari2), 2);  

?>
