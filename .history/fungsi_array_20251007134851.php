<?php
$nama0 = "Andri";
$nama1 = "Joko";
$nama2 = "Sukma";
$nama3 = "Rina";
$nama4 = "Sari";
// ... dst sampai $nama10
?>

// cara di atas kurang efektif, mending pakai array
$nama_variabel = array(
    key => value,
    key2 => value2,
    key3 => value3
    ...
);

// contoh pengaksesan array 
<?php
// pembuatan array
$nama = array(
    1 => "Andri",
    2 => "Joko",
    3 => "Sukma",
    4 => "Rina",
    5 => "Sari"
);

// cara akses array
echo $nama[1]; // Andri 
echo "<br />";
echo $nama[2]; // Joko
echo "<br />";
echo $nama[3]; // Sukma
?>

// contoh pendefisian array tanpa key
<?php
// pembuatan array
$nama = array("Andri", "Joko", "Sukma", "Rina", "Sari");

// pengaksesan array 
echo $nama[1]; // Joko 
echo "<br />";
echo $nama[2]; // Sukma 
echo "<br />";
echo $nama[3]; // Rina
?>

// contoh penggunaan array dengan kombinasi tipe data
<?php
// pembuatan array
$coba = array(
    2 => "Andri",
    "dua" => "2",
    'tiga' => 3,
    true => true,
    9 => "sembilan",
);

// pengaksesan array 
echo $coba[2]; // Andri
echo "<br />";
echo $coba["dua"]; // 2
echo "<br />";
echo $coba['tiga']; // 3
echo "<br />";
echo $coba[true]; // 1 (true dikonversi menjadi 1)
echo "<br />";
echo $coba[9]; // sembilan
?>

// contoh penggunaan short syntax array
<?php
// pembuatan array
$nama = ["Andri", "Joko", "Sukma", "Rina", "Sari"];

// pengaksesan array
echo $nama[1]; // Joko 
echo "<br />";
echo $nama[2]; // Sukma 
echo "<br />";
echo $nama[3]; // Rina
?>
