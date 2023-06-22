<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TokoAzka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
<?php
session_start();
if(!isset($_SESSION['user'])){
    echo "<script>alert('Silahkan login!');window.location='login.php';</script>";
}
?>
<h3>Hai! <?= $_SESSION['user']['nama'];?> Selamat Datang</h3>
    </div>
    <div class="menu">
        <a href="web.php"><img src="img/B.png"></a>
        <a href="web.php"><img src="img/A.png"></a>
        <a href="women.php" class="women">WOMEN</a>
        <a href="men.php" class="men">MEN</a>
        <a href="kids.php" class="kids">KIDS</a>
    </div>
    <div class="bg">
    <div class="images1">
        <img src="img/2B.avif">
        <div class="product-info">
            <p>Tank top Wanita dengan</p>
            <p>Fit yang diperbarui </p>
            <p>Tank top crop rib</p>
            <p>Kerah henley</p>
            <p>Rp 129.000</p>
            <p>Rp 149.000</p>
        </div>
    </div>
    <div class="images2">
        <img src="img/3B.avif">
        <div class="product-info">
        <p>T-Shirt Oversized Berbahan</p>
            <p>Katun yang Tahan Lama.</p>
            <p>T-Shirt Oversize Saku Kerah Bulat</p>
            <p>Lengan Half</p>
            <p>Rp 199.000</p>
            <p>Rp 249.000</p>
        </div>
    </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 TokoAzka. All rights reserved.</p>
    </div>
</body>
</html>