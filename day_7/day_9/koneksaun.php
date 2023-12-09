<?php

// define parametro sira ba koneksaun

$dsn = 'pgsql:host=localhost;dbname=flavio_web_development';
$username = 'postgres';
$password = '110202';

try{
// kria instansia PDO (PHP data objecks) ba PostgresSQL
$pdo = new PDO($dsn, $username, $password);
// set PDO error mode an ba exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Mensagem susesu
echo 'Koneksaun Susesu';
return $pdo;

} catch(PDOException $e) {
    echo 'koneksaun Error:'.$e->getMessage();
    return null;
}



?>