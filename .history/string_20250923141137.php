<?php 
$a = "Hello "; 
$b = "World!" 
$a = $b; 
echo $a; // Hello World! 
echo "<br />"; 
$a = "belajar "; 
$b = "PHP "; 
$c = "di Politeknik Negeri Jember"; 
$hasil= "Saya sedang ".$a.$b.$c; 
echo $hasil; // Maria sedang belajar PHP di Politeknik Negeri Jember 
?>

#Alternatif
<?php 
$a = "Hello "; 
$hasil = "{$a} World!"; 
echo $hasil; // Hello World! 
echo "<br />"; 
$a = "belajar "; 
$b = "PHP "; 
$c = "di Politeknik Negeri Jember"; 
$hasil= "Saya sedang {$a}{$b}{$c}"; 
echo $hasil; // Maria sedang belajar PHP di Politeknik Negeri Jember 
?>