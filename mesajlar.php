<?php

echo "Adı: ";
$adi = $_POST['txtFirstName'];
echo $adi."<br>";
echo "Soyadı: ";
$soyadi =$_POST['txtLastName'];
echo $soyadi."<br>";
echo "E-mail: ";
$mail = $_POST['txtFormEmail'];
echo $mail."<br>";
echo "Konu: ";
$konu = $_POST['txtSubject'];
echo $konu."<br>";
echo "Mesajı: ";
$mesaj = $_POST['txtComments'];
echo $mesaj."<br>";


?>

<html>
<body>
<link rel="stylesheet" href="style2 .css">
<br>
    <a href="index.html">Sayfaya Geri Dön</a>
</body>
</html>
