<?php
function koneksaun(){
    // Define parametro sira ba koneksaun
    $dsn = 'pgsql:host=localhost;dbname=flavio_web_development';
    $username = 'postgres';
    $password = '110202';

    try {
        // Kria instansia PDO (PHP Data Objects) ba PostgreSQL
        $pdo = new PDO($dsn, $username, $password);
        // Set PDO error mode ba exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;

    } catch (PDOException $e) {
        echo 'Koneksaun Error: '.$e->getMessage();
        return null;
    }

}
?>