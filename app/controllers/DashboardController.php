<?php  
// planning-school/app/controllers/DashboardController.php  

require_once '../core/Controller.php';  

class DashboardController extends Controller {  
    public function index() {  
		 //	echo "Welcome to the Dashboard!"; 
        // Load the dashboard view  
        $this->view('dashboard/index'); // This corresponds to app/views/dashboard/index.php  
    }  
}  
?>