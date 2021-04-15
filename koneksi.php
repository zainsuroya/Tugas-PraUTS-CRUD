<?php
define('BASE_URL', 'http://localhost/pwl/prauts/');

$dsn      = 'mysql:dbname=dbpegawai;host=localhost';
$user     = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
} catch (PDOException $e) {
    echo '<script>alert("Gagal koneksi DB karena ' . $e->getMessage() . '")</script>';
}
