<?php
echo "<h3>Perulangan FOR (increment +1)</h3>";
for($i = 100; $i <= 1000; $i+=1) {
    echo $i . " ";
}

echo "<h3>Perulangan WHILE (increment +2)</h3>";
$j = 100;
while($j <= 1000) {
    echo $j . " ";
    $j += 2;
}

echo "<h3>Perulangan DO-WHILE (increment +5)</h3>";
$k = 100;
do {
    echo $k . " ";
    $k += 5;
} while($k <= 1000);

echo "<h3>Perulangan FOREACH (increment +10)</h3>";
// bikin array dari 100 sampai 1000
$angka = range(100, 1000, 10); // auto naik 10
foreach($angka as $val) {
    echo $val . " ";
}
?>
