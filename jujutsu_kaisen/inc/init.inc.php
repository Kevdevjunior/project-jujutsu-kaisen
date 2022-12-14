<?php

// connexion BDD

$host = 'mysql:host=localhost;dbname=jujutsu';
$login = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$pdo = new PDO($host, $login, $password, $options);

// echo '<pre>'; print_r($pdo); '</pre>';

$msg = '';