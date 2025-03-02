<?php
$nilai = 51;

if($nilai > 85){
    echo"Anda mendapatkan nilai A";
}elseif(($nilai > 75) && ($nilai<85)){
    echo"Anda mendapatkan nilai AB";
}elseif(($nilai > 65) && ($nilai<75)){
    echo"Anda mendapatkan nilai B";
} elseif(($nilai > 60) && ($nilai<65)){
    echo"Anda mendapatkan nilai BC";
}elseif(($nilai> 50) && ($nilai<60)){
    echo"Anda mendapatkan nilai C";
}elseif(($nilai > 40) && ($nilai < 50)){
    echo"Anda mendapatkan nilai D";
}elseif($nilai < 40){
    echo"Anda mendapatkan nilai E";
}
?>