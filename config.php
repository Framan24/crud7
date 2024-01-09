<?php
define('BD_HOST','localhost');
define('BD_USER','root');
define('BD_PASSWORD','');
define('BD_NAME','practica');

$hostDB = "mysql:host=".BD_HOST.";dbname=".BD_NAME.";";

try {
    $conn = new PDO($hostDB,BD_USER,BD_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("no se pudo conectar").$e->getMessage();
}

?>