<?php
// Namespace
namespace NmiDev;

// Use Altorouter from root 
use AltoRouter; 
// Use CoreController class from another namesapce
use NmiDev\Controllers\CoreController; 

// Class Application 
class Application {
    // Property $router
    private $router;
    // Method constructor
    public function __construct() {
        // Informations from confi.conf
        $config = parse_ini_file(__DIR__ . '/config.conf');
        // Instantiation of the Router
        $this->router = new AltoRouter();
        // Configuration of the Router
        $this->router->setBasePath($config['BASE_PATH']);
        // Call method defineRoads
        $this->defineRoads();
    }
     // Méthod for the roads
     public function defineRoads() {
        // Home
        $this->router->map('GET', '/', 'MainController#home', 'main_home');
        // Contact
        $this->router->map('GET', '/contact', 'MainController#contact', 'main_contact');
    }
    // Method run for check the match and dispatch
    public function run() {
        // Road for the current URL 
        $match = $this->router->match();
        // If we find a road 
        if ($match !== false) {
            // Get informations about Controller and method
            $dispatcherInfos = $match['target'];            
            // Explode the part from target
            $controllerAndMethod = explode('#', $dispatcherInfos);            
            // Stock informations about Controller and method
            $controllerName = $controllerAndMethod[0];
            $methodName = $controllerAndMethod[1];

            // Add the namespace for Controllers (fully qualified class name)
            $controllerName = 'NmiDev\Controllers\\'.$controllerName;
            // Instantiation of the new Controller
            $controller = new $controllerName();
            // Call the method matching the road with road parameters
            $controller->$methodName($match['params']);
        }
        // If we don't find a road
        else {
            // Call the method from CoreController for 404 status
            CoreController::sendHttpError(404, 'Sonia - 404');
        }
    }
}