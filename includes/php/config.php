<?php 
session_start();

global $pdo;
try{
    $pdo = new PDO("mysql:dbname=sistemalogin;host=127.0.0.1", "root", "");
} catch(PDOException $e) {
    "Falhou: ".$e->getMessage();
}

?>