<?php
// Fichier : core/Model.php

require_once __DIR__ . '/../config/database.php';

class Model {
    protected static function query($sql, $params = []) {
        $pdo = $GLOBALS['pdo']; // ← Récupération fiable du PDO global

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}
