<?php
// Namespace 
namespace NmiDev\Controllers;

// Class ProjectController
class ProjectController extends CoreController {
        // Method for projects list
        public function list() {     
            // Data to send for the view

            // Calling the method show for the view project list
            $this->show('project/list');
        }
        public function details($urlParams) {
            // Catch the ID of the project from the URL
            $id = $urlParams['id'];
            // Catch the slug of the project from the URL
            $slug = $urlParams['slug'];
            
            // Calling the method show for the view project details with sending datas
            $this->show('project/details', [
                'idProject' => $id,
                'slugProject' => $slug
            ]);
        }
}