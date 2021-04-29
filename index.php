<?php


/** Info pour la connexion au serveur de base de données */
const DB_DSN        = 'mysql:host=localhost;dbname=classicmodels';
const DB_USER       = 'root';
const DB_PASSWORD   = 'root';

$pdo = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
$pdo->exec('SET NAMES UTF8');


$stmt = $pdo->prepare('SELECT productName, productDescription, buyPrice
    FROM products ');
    $stmt->execute();
    $order = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $json = json_encode($order);
    echo $json


?>