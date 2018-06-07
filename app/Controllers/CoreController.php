<?php
// Namespace 
namespace NmiDev\Controllers;

// Inherited class for all Controllers
abstract class CoreController {
    // Method for showing the view
    protected function show() {
        // TODO: 
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