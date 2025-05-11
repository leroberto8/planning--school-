<?php
// File: planning-school/app/controllers/SalleController.php

require_once __DIR__ . '/../../core/Controller.php';
require_once __DIR__ . '/../models/Salle.php'; 

class SalleController extends Controller {
    public function index() {
        $salles = Salle::all(); // Fetch all salles from the database
        require_once '../app/views/salle/index.php'; // Load the view
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $salle = new Salle();
            $salle->nom = $_POST['nom'];
            $salle->save(); // Save the salle to the database
            header('Location: /planning-school/salle/index');
        }
        require_once '../app/views/salle/create.php'; // Load the create view
    }

    public function edit($id) {  
    $salle = Salle::find($id); // Find salle by ID  

    // Check if the salle exists  
    if (!$salle) {  
        // Handle the case where the salle does not exist  
        header('Location: /planning-school/salle/index'); // Redirect to the index if not found  
        exit();  
    }  

    // Handle the POST request for updating  
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
        $salle->nom = $_POST['nom'];  
        $salle->save(); // Update salle  
        header('Location: /planning-school/salle/index');  
        exit();  
    }  

    // Load the edit view with the salle data  
    require_once '../app/views/salle/edit.php'; // Load the edit view  
}

    public function delete($id) {
        $salle = Salle::find($id);
        $salle->delete(); // Delete salle
        header('Location: /planning-school/salle/index');
    }
}
