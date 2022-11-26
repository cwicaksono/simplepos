<?php
try {
    $hostname = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'pos';

    $koneksi = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    echo $e->getMessage();
}

include_once 'barang_class.php';

$brg = new barang($con);

?>
?>