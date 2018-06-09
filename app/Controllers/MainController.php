<?php
// Namespace 
namespace NmiDev\Controllers;

// Use Plates for views managment as Plates
use League\Plates\Engine as Plates;

// Class MainController
class MainController extends CoreController {
        // Method for home page
        public function home() {
            // Create new Plates instance
            $templates = new Plates(__DIR__.'/../Views');

            // Render a template
            echo $templates->render('home', ['test' => 'Nicolas']);
        }
        // Method for contact page
        public function contact() {
            echo("Contact");
        }
}