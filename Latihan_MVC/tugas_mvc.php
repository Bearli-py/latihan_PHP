<?php
// MODEL
class Buku {
  private $dataBuku = [
    ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
    ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
    ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
  ];

  public function getAllBuku() {
    return $this->dataBuku;
  }
}

// VIEW
class BukuView {
  public function tampilkan($listBuku) {
    echo "<h2>Daftar Buku Perpustakaan</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Judul</th><th>Pengarang</th><th>Tahun Terbit</th></tr>";
    foreach ($listBuku as $buku) {
      echo "<tr>";
      echo "<td>{$buku['judul']}</td>";
      echo "<td>{$buku['pengarang']}</td>";
      echo "<td>{$buku['tahun']}</td>";
      echo "</tr>";
    }
    echo "</table>";
  }
}

// CONTROLLER
class BukuController {
  public function index() {
    $model = new Buku();
    $view = new BukuView();

    $listBuku = $model->getAllBuku();
    $view->tampilkan($listBuku);
  }
}

// ENTRY POINT
$controller = new BukuController();
$controller->index();
?>