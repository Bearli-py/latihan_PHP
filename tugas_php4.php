<?php
echo "1. MENENTUKAN BILANGAN TERBESAR<br>";

// fungsi bilangan terbesar
function terbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// contoh bilangan (aku pake 45 dan 72)
$bil1 = 45;
$bil2 = 72;
echo "Dari bilangan $bil1 dan $bil2, yang terbesar adalah " . terbesar($bil1, $bil2) . "<br><br>";

echo "2. TANGGAL SEKARANG (pakai getdate)<br>";

$tanggal = getdate();
echo "Sekarang Tanggal: " . $tanggal['mday'] . "-" . $tanggal['mon'] . "-" . $tanggal['year'] . "<br><br>";

echo "3. TANGGAL SEKARANG (pakai date)<br>";
echo "Format: " . date('D-F-Y') . "<br>";
?>
