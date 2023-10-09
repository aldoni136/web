<?php
/*
NIM     : 210511170
NAMA    : ALDONI
KELAS   : D
*/

echo "<h3>Menghitung Segitiga</h3>";    //judul

//variabel
$sisiA = 7;
$sisiB = 8;
$sisiC = 9;
$alas = 10;
$tinggi = 11;


//rumus
$luas = 1/2 * $alas * $tinggi;
$keliling = $sisiA + $sisiB + $sisiC;

//output
echo "Sisi A = " . $sisiA;
echo "<br/>";
echo "Sisi B = " . $sisiB;
echo "<br/>";
echo "Sisi c = " . $sisiC;
echo "<br/>";
echo "Alas = " . $alas;
echo "<br/>";
echo "Tinggi = " . $tinggi;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>