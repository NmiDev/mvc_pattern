<?php
// Namespace 
namespace NmiDev\Controllers;

// Use Plates for views managment as Plates
use League\Plates\Engine as Plates;

// Inherited class for all Controllers
abstract class CoreController {
    // Need the template engine in this property for all the method
    protected $templateEngine;
    // Constructor, generate views engine with a parameter (objet Application with router)
    public function __construct($app){
        // Create new Plates instance
        $this->templateEngine = new Plates(__DIR__.'/../Views');
        // Data for all the views, we need router
        $this->templateEngine->addData([
            'router' => $app->getRouter()
        ]);
    }
    // Method for showing the view
    protected function show($templateName, $dataToViews=[]) {
        // Render a template
        echo $this->templateEngine->render($templateName, $dataToViews);
    }
    // Method for showing an answer JSON during the Ajax request
    protected static function sendJson($data) {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
    // Method sending a HTTP error (404, 403, 500, 400, ...)
    public static function sendHttpError($errorCode, $htmlContent='') {
        // Error 404
        if ($errorCode == 404) {
            // Sending specific error status 404 HTTP
            header("HTTP/1.0 404 Not Found");
            echo $htmlContent;
            exit;
        }
    }
}