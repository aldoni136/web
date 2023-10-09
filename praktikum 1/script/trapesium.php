<?php
/*
NIM     : 210511170
NAMA    : ALDONI
KELAS   : D
*/

echo "<h3>Menghitung Trapesium</h3>";    //judul

//variabel
$sisiA = 11;
$sisiB = 12;
$sisiC = 13;
$sisiD = 14;
$tinggi = 15;


//rumus
$luas = $sisiA + $sisiB / 2 * $tinggi;
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
echo "Diagonal 1 = " . $tinggi;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>