<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="testakhir1.php" method="POST">
        <label>Jenis member (y/n): </label><br>
        <select name="member">
            <option value="y">Yes</option>
            <option value="n">No</option>
        </select><br>
        <label>Total belanja: </label><br>
        <input type="text" name="total"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php
$member = $_POST["member"];
$bayar = $_POST["total"];

if($member == "y"){
    echo"anda adalah member <br>";
    if($bayar > 100000){
        $diskon = 0.075;
        echo"anda mendapatkan diskon sebesar 7.5%<br>";
    }elseif($bayar > 10000 and $bayar <= 100000){
        $diskon = 0.05;
        echo"anda mendapatkan diskon sebesar 5%<br>";
    }elseif($bayar <= 10000){
        $diskon = 0.02;
        echo"anda mendapatkan diskon sebesar 2%<br>";
    }
    $ppn = $bayar * 0.12;
    $layanan = $bayar * 0.05;
    $total = $bayar - ($bayar * $diskon) + $ppn + $layanan;
    
    echo"total belanja amda sebelum diskon adalah : Rp. {$bayar} <br>";
    echo"{$ppn} <br>";
    echo"{$layanan} <br>";
    echo"total belanja anda setelah diskon dan penambahan ppn dan layanan adalah : Rp. {$total}<br>";
}else{
    echo" Total belanja anda adalah : Rp. {$bayar}<br>";
}

?>