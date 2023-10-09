<?php
/*
NIM     : 210511170
NAMA    : ALDONI
KELAS   : D
*/

echo "<h3>Menghitung Layang-Layang</h3>";    //judul

//variabel
$sisiA = 20;
$sisiB = 17;
$sisiC = 16;
$sisiD = 14;
$diagonal1 = 10;
$diagonal2 = 11;


//rumus
$luas = 1/2 * $diagonal1 * $diagonal2;
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
echo "Diagonal 1 = " . $diagonal1;
echo "<br/>";
echo "Diagonal 2 = " . $diagonal2;
echo "<br/>";
echo "Luas = " . $luas;
echo "<br/>";
echo "Keliling = " . $keliling;
?>