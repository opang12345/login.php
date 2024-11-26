<?php  
// inisialisasi session
session_start();

// mengecek apakah ada user yang aktif, jika tidak arahkan ke login.php
if(!isset($_SESSION['user'])) {
    header('location:login.php'); // arahkan ke login.php
}
?>

<?php 
    include_once 'header.php';
?>
<?php 
    include_once 'sidebar.php';
    include_once 'models/koneksi.php';
    include_once 'h_barang.php';
?>
<?php 
    include_once 'footer.php';
?>