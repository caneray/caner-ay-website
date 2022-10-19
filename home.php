<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>

    <body>
        <h1>Hoşgeldin, "<?php  echo substr($_SESSION['user_name'],0,10) ; ?>"</h1>
        <a href="index.html">Sayfaya Geçiş</a> <br><br>
        <a href="logout.php">Logout</a>
    </body>

</html>

<?php 

}else{
    header("Location: index.php");
    exit();
}

?>