<?php
// Program Penjumlahan Dua Matriks 3x3 Menggunakan Looping

// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Array untuk menyimpan hasil
$hasil = [];

// Proses penjumlahan dengan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $hasil[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Tampilkan Matriks A
echo "<h3>Matriks A</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $A[$i][$j] . " ";
    }
    echo "<br>";
}

// Tampilkan Matriks B
echo "<h3>Matriks B</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $B[$i][$j] . " ";
    }
    echo "<br>";
}

// Tampilkan Hasil Penjumlahan
echo "<h3>Hasil Penjumlahan Matriks A + B</h3>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $hasil[$i][$j] . " ";
    }
    echo "<br>";
}
?>