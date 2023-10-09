<?php
/*
NIM     : 210511170
NAMA    : ALDONI
KELAS   : D
*/

echo "<h3>Menghitung Jajar Genjang</h3>";    //judul

//variabel
$sisiA = 10;
$sisiB = 12;
$sisiC = 12;
$sisiD = 10;
$tinggi = 8;


//rumus
$luas = $sisiA * $tinggi;
$keliling = $sisiA + $sisiB + $sisiC + $sisiD;

//output
echo "Sisi A = " . $sisiA;
echo "<br/>";
echo "Sisi B = " . $sisiB;
echo "<br/>";
echo "Sisi c = " . $sisiC;
echo "<br/>";
echo "Sisi D = " . $sisiD;
echo "<br/>";
echo "Tinggi = " . $tinggi;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>