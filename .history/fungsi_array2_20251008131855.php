<?php
// ===============================
// Contoh Array 2 Dimensi
// ===============================
echo "<h3>// Contoh Array 2 Dimensi</h3>";

$mahasiswa = [
    ["Andi", "Informatika", 2021],
    ["Budi", "Sistem Informasi", 2020],
    ["Citra", "Bisnis Digital", 2022]
];

// Akses elemen
echo "Nama: " . $mahasiswa[0][0] . "<br>"; // Output: Andi
echo "Jurusan: " . $mahasiswa[1][1] . "<br><br>"; // Output: Sistem Informasi


// ===============================
// Array Asosiatif Multidimensi
// ===============================
echo "<h3>// Array Asosiatif Multidimensi</h3>";

$produk = [
    ["nama" => "Laptop", "harga" => 7500000, "stok" => 10],
    ["nama" => "HP", "harga" => 3000000, "stok" => 15],
    ["nama" => "Tablet", "harga" => 2500000, "stok" => 7],
];

// Menampilkan semua produk
foreach ($produk as $p) {
    echo "Nama: " . $p["nama"] . " | Harga: " . $p["harga"] . " | Stok: " . $p["stok"] . "<br>";
}
echo "<br>";


// ===============================
// Array 3 Dimensi
// ===============================
echo "<h3>// Array 3 Dimensi</h3>";

$array = [
    [ // Tabel 1
        ["elemen111", "elemen112", "elemen113"],
        ["elemen121", "elemen122", "elemen123"]
    ],
    [ // Tabel 2
        ["elemen211", "elemen212", "elemen213"],
        ["elemen221", "elemen222", "elemen223"]
    ]
];

// Menampilkan isi array 3 dimensi
foreach ($array as $tabelIndex => $tabel) {
    echo "<b>Tabel " . ($tabelIndex + 1) . ":</b><br>";
    foreach ($tabel as $baris) {
        echo implode(", ", $baris) . "<br>";
    }
    echo "<br>";
}
?>