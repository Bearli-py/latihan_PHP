<?php
$nilai = 90;

echo "CONTOH IF ELSE <br>";
if($nilai >= 0 && $nilai <= 40) {
    echo "Selamat Anda mendapat grade E <br>";
} elseif($nilai >= 41 && $nilai <= 50) {
    echo "Selamat Anda mendapat grade D <br>";
} elseif($nilai >= 51 && $nilai <= 60) {
    echo "Selamat Anda mendapat grade C <br>";
} elseif($nilai >= 61 && $nilai <= 79) {
    echo "Selamat Anda mendapat grade B <br>";
} elseif($nilai >= 80 && $nilai <= 100) {
    echo "Selamat Anda mendapat grade A <br>";
} else {
    echo "Nilai tidak valid <br>";
}

echo "<br>CONTOH SWITCH <br>";
switch(true) {
    case ($nilai >= 0 && $nilai <= 40):
        echo "Grade E";
        break;
    case ($nilai >= 41 && $nilai <= 50):
        echo "Grade D";
        break;
    case ($nilai >= 51 && $nilai <= 60):
        echo "Grade C";
        break;
    case ($nilai >= 61 && $nilai <= 79):
        echo "Grade B";
        break;
    case ($nilai >= 80 && $nilai <= 100):
        echo "Grade A";
        break;
    default:
        echo "Nilai tidak valid";
        break;
}

echo "<br><br>CONTOH FOR <br>";
for($i=1; $i<=5; $i++) {
    echo "Looping FOR ke : ".$i."<br>";
}

echo "<br>CONTOH WHILE <br>";
$j = 1;
while($j<=5) {
    echo "Looping While ke : ".$j."<br>";
    $j++;
}
?>