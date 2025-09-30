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
?>
