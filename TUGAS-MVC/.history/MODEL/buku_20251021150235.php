<?php
class Buku {
    public $judul;
    public $pengarang;
    public $tahun_terbit;

    public function __construct($judul, $pengarang, $tahun_terbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
    }

    public static function semuaBuku() {
        // Tambahkan 6 data buku
        $buku1 = new Buku("Bisnis Digital Modern", "Rizky Ananda", 2023);
        $buku2 = new Buku("UI/UX Design Dasar", "Nabila Putri", 2022);
        $buku3 = new Buku("Pemrograman Web", "Andhika Pratama", 2021);
        $buku4 = new Buku("Kecerdasan Buatan", "Bagas Wicaksono", 2020);
        $buku5 = new Buku("Analisis Data untuk Pemula", "Siti Rahma", 2024);
        $buku6 = new Buku("Manajemen Proyek Teknologi", "Fadli Ramadhan", 2019);

        return [$buku1, $buku2, $buku3, $buku4, $buku5, $buku6];
    }
}

// tampilkan data dalam tabel
$bukuList = Buku::semuaBuku();

echo "<h2 style='text-align:center; font-family:Arial;'>Daftar Buku Perpustakaan</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='margin:auto; border-collapse:collapse; font-family:Arial;'>";
echo "<tr style='background-color:#f2f2f2;'>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
      </tr>";

$no = 1;
foreach ($bukuList as $buku) {
    echo "<tr>
            <td>{$no}</td>
            <td>{$buku->judul}</td>
            <td>{$buku->pengarang}</td>
            <td>{$buku->tahun_terbit}</td>
          </tr>";
    $no++;
}

echo "</table>";
?>