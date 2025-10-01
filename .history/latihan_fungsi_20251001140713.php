<?php
    echo "<h1>MEMBUAT FUNGSI</h1>";
    echo "<hr>";
    
function berhasil()
{
    echo "<h2>SELAMAT ANDA BERHASIL</h2>";
}

function gagal()
{
    echo "<h2 style='color: red;'>MAAF ANDA GAGAL</h2>";
}

$nilai = 90;
    if ($nilai>=75)
    { berhasil(); }
    else { gagal(); };
    
    echo "<br><hr><br>";
    echo "<h3>FUNGSI DENGAN PARAMETER</h3>";
    
function jumlah($a,$b)
{ return $a+$b; }

$nilai1=10;
?>