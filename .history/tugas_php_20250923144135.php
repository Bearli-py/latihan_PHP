<?php
// --- Nomor 1 ---
// Kenapa "90" + "80" bisa jadi 170?
// Karena PHP otomatis convert string angka ke integer kalau dipakai di operasi aritmatika.
$tugas1 = "90";
$tugas2 = "80";
$jumlah = $tugas1 + $tugas2; 

// --- Nomor 2 ---
// Bedanya / dan %
$pembagian = 10 / 3; // hasilnya 3.333...
$modulo = 10 % 3;    // hasilnya 1

// --- Nomor 3 ---
// Gabungkan string jadi "9080"
$gabung = $tugas1 . $tugas2; 

// --- String bawaan ---
$string1='Ini adalah string sederhana'; 
$string2='Ini adalah 
string yang bisa 
memiliki beberapa 
baris'; 
$string3='Dia berkata: "I\'ll be back"'; 
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc'; 
$string5='Kalimat ini tidak akan pindah ke: \n baris baru'; 
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3'; 

// --- Output ---
echo "<h3>Tugas 1</h3>";
echo "Hasil dari '90' + '80' = " . $jumlah . "<br>";

echo "<h3>Tugas 2</h3>";
echo "Hasil 10 / 3 = " . $pembagian . "<br>";
echo "Hasil 10 % 3 = " . $modulo . "<br>";

echo "<h3>Tugas 3</h3>";
echo "Gabungan string tugas1 dan tugas2 = " . $gabung . "<br><br>";

echo "<h3>String Bawaan</h3>";
echo $string1; echo "<br>";  
echo $string2; echo "<br>";  
echo $string3; echo "<br>";  
echo $string4; echo "<br>";  
echo $string5; echo "<br>";  
echo $string6; 
?>

