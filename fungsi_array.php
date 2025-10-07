<?php
$nama0 = "Andri";
$nama1 = "Joko";
$nama2 = "Sukma";
$nama3 = "Rina";
$nama4 = "Sari";
// ... dst sampai $nama10
?>

<?php
// cara di atas kurang efektif, mending pakai array
// $nama_variabel = array(key => value, key2 => value2, key3 => value3 ...);

// contoh pengaksesan array
echo "<h4>Contoh Pengaksesan Array</h4>";
$nama = array(
    1 => "Andri",
    2 => "Joko",
    3 => "Sukma",
    4 => "Rina",
    5 => "Sari"
);

echo $nama[1] . "<br />";
echo $nama[2] . "<br />";
echo $nama[3] . "<br />";

// contoh pendefinisian array tanpa key
echo "<h4>Contoh Pendefinisian Array Tanpa Key</h4>";
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");

echo $nama[1] . "<br />";
echo $nama[2] . "<br />";
echo $nama[3] . "<br />";

// contoh penggunaan array dengan kombinasi tipe data
echo "<h4>Contoh Penggunaan Array dengan Kombinasi Tipe Data</h4>";
$coba = array(
    2 => "Andri",
    "dua" => "2",
    'tiga' => 3,
    true => true,
    9 => "sembilan",
);

echo $coba[2] . "<br />";
echo $coba["dua"] . "<br />";
echo $coba['tiga'] . "<br />";
echo $coba[true] . "<br />";
echo $coba[9] . "<br />";

// contoh penggunaan short syntax array
echo "<h4>Contoh Penggunaan Short Syntax Array</h4>";
$nama = ["Andri", "Joko", "Sukma", "Rina", "Sari"];

echo $nama[1] . "<br />";
echo $nama[2] . "<br />";
echo $nama[3] . "<br />";
?>
