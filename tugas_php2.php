<?php
// 1. Login Sederhana
echo "<h2>1. Login Sederhana</h2>";
$user = "maria";
$pass = "34567";

if ($user == "maria" && $pass == "34567") {
    echo "Login berhasil, selamat datang $user!";
} else {
    echo "Username atau password salah!";
}

echo "<hr>";


// 2. Grade Nilai
echo "<h2>2. Grade Nilai Mahasiswa</h2>";
$nilai = 82;

if ($nilai >= 85) {
    echo "Grade: A";
} elseif ($nilai >= 70) {
    echo "Grade: B";
} elseif ($nilai >= 60) {
    echo "Grade: C";
} else {
    echo "Grade: D (tidak lulus)";
}

echo "<hr>";


// 3. Diskon Belanja
echo "<h2>3. Diskon Belanja</h2>";
$totalBelanja = 250000;

if ($totalBelanja >= 200000) {
    echo "Total belanja: Rp$totalBelanja <br>";
    echo "Selamat, kamu dapat diskon 20%!";
} else {
    echo "Total belanja: Rp$totalBelanja <br>";
    echo "Belanja minimal Rp200.000 untuk dapat diskon.";
}

echo "<hr>";


// 4. Ganjil / Genap
echo "<h2>4. Cek Ganjil / Genap</h2>";
$angka = 15;

if ($angka % 2 == 0) {
    echo "$angka adalah bilangan Genap";
} else {
    echo "$angka adalah bilangan Ganjil";
}

echo "<hr>";


// 5. Kategori Umur
echo "<h2>5. Kategori Umur</h2>";
$umur = 19;

if ($umur < 13) {
    echo "Kategori: Anak-anak";
} elseif ($umur < 18) {
    echo "Kategori: Remaja";
} elseif ($umur < 60) {
    echo "Kategori: Dewasa";
} else {
    echo "Kategori: Lansia";
}
?>
