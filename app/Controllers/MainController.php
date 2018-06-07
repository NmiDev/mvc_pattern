<?php
// Namespace 
namespace NmiDev\Controllers;

// Class MainController
class MainController extends CoreController {
        // Method for home page
        public function home() {
            echo("Hello World");
        }
        // Method for contact page
        public function contact() {
            echo("Contact");
        }
}