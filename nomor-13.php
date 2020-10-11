<?php
function hitung($str){
$kali = explode('*', $str);
$bagi  = explode('/', $str);
$tambah  = explode('+', $str);
$kurang  = explode('-', $str);
if (count($kali)==2)
return $kali[0] * $kali[1];
if (count($bagi)==2)
return $bagi[0] / $bagi[1];
if (count($tambah)==2)
return $tambah[0] + $tambah[1];
if (count($kurang)==)
return $kurang[0] - $kurang[1];
}
echo hitung('100*2');
echo hitung('100/2');
echo hitung('100+2');
echo hitung('100-2');

?>
