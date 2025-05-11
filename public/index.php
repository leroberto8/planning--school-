<?php  
// Fichier : public/index.php  
session_start(); // Ensure session starts 
require_once '../core/Router.php';  

// Get the requested URL and pass it to the router  
$url = $_GET['url'] ?? ''; // Leave empty to route to default method  
Router::route($url);