<?php 
    $dbhost="localhost";
    $dbname="belajar_database";
    $dbuser="root";
    $dbpass="";
    
    $dsn="mysql:host=$dbhost;dbname=$dbname";

    try {
        $dbh = new PDO($dsn, $dbuser, $dbpass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch (PDOException $e){
        echo 'Connection Failed : '.$e->getMessage();
    }
    
    $koneksi = mysqli_connect("localhost","root","","belajar_database",) or die ('database tidak terhubung');

?>