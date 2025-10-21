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
        $buku1 = new Buku("Logika pembetulan proyek", "Irfan", 2020);
        $buku2 = new Buku("Matematika", "Yazid", 2019);
        $buku3 = new Buku("Ilmu pengetahuan Sosial", "Alpin", 2021);
        $buku4 = new Buku("Pembataian Rakyat", "gali", 2018);
        $buku5 = new Buku("Madigol", "apil", 2022);
        $buku6 = new Buku("Tidur di bumi", "Hadi", 2015);

        return [$buku1, $buku2, $buku3, $buku4, $buku5, $buku6];
    }
}
