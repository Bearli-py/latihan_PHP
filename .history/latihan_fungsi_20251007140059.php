<?php
echo "MEMBUAT FUNGSI<br>";

// fungsi tanpa parameter
function berhasil() {
    echo "SELAMAT ANDA BERHASIL<br>";
}

function gagal() {
    echo "MAAF ANDA GAGAL<br>";
}

// contoh pemanggilan fungsi
$nilai1 = 90;
if ($nilai1 >= 75) {
    berhasil();
} else {
    gagal();
}

echo "<br>";

// fungsi dengan parameter
echo "FUNGSI DENGAN PARAMETER<br>";

function jumlah($a, $b) { // fungsi dengan 2 parameter
    return $a + $b; // nilai kembali (return value)
}

$nilai2 = 10;
$nilai3 = 15;
echo "Hasil penjumlahan $nilai2 + $nilai3 = " . jumlah($nilai2, $nilai3) . "<br>";

echo "<br>";

// fungsi bawaan PHP
echo "FUNGSI BAWAAN<br>";

$tanggal = getdate();
echo "Sekarang Tanggal: " . $tanggal['mday'] . " " . $tanggal['month'] . " " . $tanggal['year'] . "<br>";
echo "Hari: " . $tanggal['weekday'] . "<br>";
echo "Jam: " . $tanggal['hours'] . ":" . $tanggal['minutes'] . ":" . $tanggal['seconds'] . "<br>";
?>