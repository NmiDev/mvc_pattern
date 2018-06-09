<?php
// Namespace 
namespace NmiDev\Controllers;

// Class MainController
class MainController extends CoreController {
        // Method for home page
        public function home() {     
            // Data to send for the view
            $dataToViews = [
                'message' => 'Visiteur(s)'
            ];
            // Calling the method show for the view home
            $this->show('main/home', $dataToViews);
            
        }
        // Method for contact page
        public function contact() {
            // Data to send for the view

            // Calling the method show for the view home
            $this->show('main/contact');
        }
}