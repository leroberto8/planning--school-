<?php
// File: planning-school/app/models/Salle.php

require_once __DIR__ . '/../../core/Model.php'; // Assure-toi d’inclure la classe par sécurité

class Salle extends Model {
    protected static $table = 'salles';

    public static function all() {
        // Fetch all salles from the database
        return self::query("SELECT * FROM " . self::$table);
    }

    public static function find($id) {
        $results = self::query("SELECT * FROM " . self::$table . " WHERE id = ?", [$id]);
        return $results ? $results[0] : null;
    }

    public function save() {
        if (isset($this->id)) {
            // Update
            return self::query("UPDATE " . self::$table . " SET nom = ? WHERE id = ?", [$this->nom, $this->id]);
        } else {
            // Insert
            return self::query("INSERT INTO " . self::$table . " (nom) VALUES (?)", [$this->nom]);
        }
    }

    public function delete() {
        return self::query("DELETE FROM " . self::$table . " WHERE id = ?", [$this->id]);
    }
}
