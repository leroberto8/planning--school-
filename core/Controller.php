<?php
// Fichier : core/Controller.php

class Controller {
    public function model($model) {
        require_once __DIR__ . '/../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = []) {
        require_once __DIR__ . '/../app/views/' . $view . '.php';
    }
}
