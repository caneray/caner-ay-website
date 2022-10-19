<?php

$sname= "sql102.epizy.com";
$unmae= "epiz_31714807";
$password = "PrxD72Ewh0NZ";
$db_name = "epiz_31714807_webphp";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Bağlantı Hatası!";
}