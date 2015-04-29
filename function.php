<?php
//fungsi diskon -- 10000
function diskon($nilai){
$harga = $nilai-10000;
return $harga;
}
$nilai=20000;
echo "harga sebelum di diskon adalah $nilai<P>";
echo "harga sesudah di diskon adalah ";
echo diskon ($nilai);
?> 