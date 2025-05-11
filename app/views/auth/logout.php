<?php  
// Start the session  
session_start();  

// Unset all session variables  
$_SESSION = [];  

// Destroy the session  
session_destroy();  

// Redirect to the login page  
header('Location: /planning-school/auth/login'); // Adjust the path if necessary  
exit(); // Ensure no further code is executed  
?>