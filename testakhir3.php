<?php
$kota = ["Bandung", "Bogor", "Jakarta", "Banda Aceh",
"Balige","Riau","Palembang","Lampung", "Semarang", 
"Surabaya","Bali","Lombok","Kupang","Pontianak","Balikpapan",
"Sidrap","Manado","Makasar","Palu","Toraja","Jayapura","Ambon" ];

$i = 0;
while($i<count($kota)){
    echo $kota[$i]. "<br>";
    $i++;
}