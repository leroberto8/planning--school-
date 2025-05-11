<?php  
// File: core/Router.php  

class Router {  
    /**  
     * Routes the given URL to the appropriate controller and method.  
     *  
     * @param string $url The URL to route, typically obtained from the request.  
     */  
    public static function route($url) {  
        // Base path for routing  
        $basePath = '/planning-school/public/';  

        // Remove base path from the URL  
        $url = str_replace($basePath, '', $url);  
        $url = explode('/', filter_var(trim($url, '/'), FILTER_SANITIZE_URL));  

        // Determine controller and method  
        $controller = !empty($url[0]) ? ucfirst($url[0]) . 'Controller' : 'AuthController';  
        $method = $url[1] ?? 'login';  
        $params = array_slice($url, 2);  

        // Construct the path to the controller file  
        $controllerPath = '../app/controllers/' . $controller . '.php';  
        

        // Debugging: Output the controller path being checked  
        // Remove or comment this line in production  
        //echo "Looking for controller: $controllerPath<br/>";  

        // Load the controller  
        if (file_exists($controllerPath)) {  
            require_once $controllerPath;  
            if(class_exists($controller)) {  // Check if the controller class exists  
                $controllerInstance = new $controller;  
                
                // Check if the method exists  
                if (method_exists($controllerInstance, $method)) {  
                    call_user_func_array([$controllerInstance, $method], $params);  
                    return;  
                } else {  
                    echo "404 - Method '$method' not found in $controller.";  
                    return;  
                }  
            } else {  
                echo "404 - Class '$controller' does not exist.";  
                return;  
            }  
        } else {  
            echo "404 - Controller file '$controllerPath' not found.";  
            return;  
        }  
    }  
}