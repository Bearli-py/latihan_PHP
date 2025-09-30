<?php
echo "<h2>Program Perulangan 100 - 1000</h2>";

// 1. FOR (increment +1)
echo "<h3>Perulangan FOR (100 - 1000)</h3>";
for($i = 100; $i <= 1000; $i++) {
    echo $i . " ";
}

echo "<hr>";

// 2. WHILE (increment +1)
echo "<h3>Perulangan WHILE (100 - 1000)</h3>";
$j = 100;
while($j <= 1000) {
    echo $j . " ";
    $j++;
}

echo "<hr>";

// 3. DO-WHILE (increment +1)
echo "<h3>Perulangan DO-WHILE (100 - 1000)</h3>";
$k = 100;
do {
    echo $k . " ";
    $k++;
} while($k <= 1000);

echo "<hr>";

// 4. Contoh increment berbeda
echo "<h3>FOR dengan increment +2 (100 - 1000)</h3>";
for($m = 100; $m <= 1000; $m+=2) {
    echo $m . " ";
}

echo "<hr>";

echo "<h3>FOR dengan increment +5 (100 - 1000)</h3>";
for($n = 100; $n <= 1000; $n+=5) {
    echo $n . " ";
}

echo "<hr>";

echo "<h3>FOR dengan increment +10 (100 - 1000)</h3>";
for($o = 100; $o <= 1000; $o+=10) {
    echo $o . " ";
}

echo "<hr>";

// Kasus Login Attempt (3 kali percobaan)
<?php
$password_benar = "12345";
$percobaan = 0;

while($percobaan < 3) {
    $input = readline("Masukkan password: "); // di terminal / CLI
    if($input == $password_benar) {
        echo "Login berhasil!\n";
        break; // keluar loop kalau benar
    } else {
        echo "Password salah!\n";
    }
    $percobaan++;
}

if($percobaan == 3) {
    echo "Akun terkunci. Terlalu banyak percobaan.\n";
}

echo "<hr>";

// Kasus Menampilkan Daftar Produk (dari array/database)
<?php
$produk = [
    ["nama" => "Kopi Hitam", "kategori" => "Minuman"],
    ["nama" => "Roti Bakar", "kategori" => "Makanan"],
    ["nama" => "Teh Manis", "kategori" => "Minuman"],
    ["nama" => "Mie Goreng", "kategori" => "Makanan"]
];

echo "<h3>Daftar Produk Minuman:</h3>";
foreach($produk as $item) {
    if($item["kategori"] == "Minuman") {
        echo "- " . $item["nama"] . "<br>";
    }
}

echo "<hr>";

// Kasus Menghitung Total Belanja
<?php
$keranjang = [10000, 20000, 15000, 5000]; // harga barang
$total = 0;

foreach($keranjang as $harga) {
    $total += $harga;
}

if($total > 50000) {
    echo "Total belanja: Rp " . $total . "<br>";
    echo "Anda dapat diskon 10%!<br>";
    $total = $total - ($total * 0.1);
}
echo "Total yang harus dibayar: Rp " . $total;
?>