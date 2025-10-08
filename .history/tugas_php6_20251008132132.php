<?php
echo "<h2>Soal 1</h2>";

// ===============================
// Array 2 Dimensi: [Nama, Nilai Matematika, Nilai Bahasa]
// ===============================
$siswa = [
    ["Andi", 85, 90],
    ["Budi", 78, 88],
    ["Citra", 92, 80]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1][0] . "): " . $siswa[1][2] . "<br><br>";

// Cetak semua data siswa menggunakan looping
echo "<b>Data Semua Siswa:</b><br>";
foreach ($siswa as $data) {
    echo "Nama: $data[0], Nilai Matematika: $data[1], Nilai Bahasa: $data[2]<br>";
}



echo "<hr><h2>Soal 2</h2>";

// ===============================
// Array [Nama, Harga, Stok]
// ===============================
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br>";

// Hitung total nilai stok * harga untuk semua buah
$totalNilai = 0;
foreach ($buah as $b) {
    $totalNilai += $b[1] * $b[2];
}
echo "Total nilai stok × harga untuk semua buah: Rp " . number_format($totalNilai, 0, ',', '.') . "<br>";



echo "<hr><h2>Soal 3</h2>";

// ===============================
// Array Asosiatif Multidimensi: Produk E-Commerce
// ===============================
$produk = [
    ["nama" => "Laptop", "kategori" => "Elektronik", "harga" => 7500000, "rating" => 4.8],
    ["nama" => "Headset", "kategori" => "Aksesoris", "harga" => 300000, "rating" => 4.5],
    ["nama" => "Smartphone", "kategori" => "Elektronik", "harga" => 5000000, "rating" => 4.9],
];

// Cetak produk dengan harga tertinggi
$produkTertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $produkTertinggi["harga"]) {
        $produkTertinggi = $p;
    }
}

echo "<b>Produk dengan harga tertinggi:</b><br>";
echo "Nama: " . $produkTertinggi["nama"] . "<br>";
echo "Kategori: " . $produkTertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($produkTertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $produkTertinggi["rating"] . "<br>";



echo "<hr><h2>Soal 4</h2>";

// ===============================
// Array 3x3 berisi angka acak (1–9)
// ===============================
$angka = [
    [2, 5, 7],
    [1, 9, 3],
    [4, 6, 8]
];

// Cetak array dalam bentuk matriks
echo "<b>Bentuk Matriks:</b><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $angka[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
$total = 0;
foreach ($angka as $baris) {
    foreach ($baris as $nilai) {
        $total += $nilai;
    }
}
echo "<br>Total semua elemen: $total";
?>