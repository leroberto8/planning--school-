<?php
// Fichier : config/database.php

$host = 'localhost';
$dbname = 'PlanningSchool';
$username = 'root';
$password = ''; // par défaut pour Laragon

try {
    $GLOBALS['pdo'] = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
