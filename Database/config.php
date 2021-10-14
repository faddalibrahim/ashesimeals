<?php

$host = 'localhost';
$dbname = 'ashesimeals';
$user = 'root';
$dbpassword = null;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$dbpassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, 
     PDO::ERRMODE_EXCEPTION);
    $output = 'Database connection established.';

    
    $sql = 'SELECT `name` FROM `akonnor_meals` ORDER BY `created_at` DESC';
    $result = $pdo->query($sql);

} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage(). ' in ' . $e->getFile() . ' : '. $e->getLine();
}

?>