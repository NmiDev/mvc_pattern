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
        // Method for history page
        public function history() {
            // Calling the method show for the view history
            $this->show('main/history');
        }
        // Method for contact page
        public function contact() {
            // Calling the method show for the view contact
            $this->show('main/contact');
        }
        public function legal() {
            // Calling the method show for the view contact
            $this->show('main/legal');
        }
}