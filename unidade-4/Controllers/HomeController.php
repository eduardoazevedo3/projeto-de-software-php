<?php
/**
 * Controlador Home
 */

namespace Controllers;

use Classes\Controller;

class HomeController extends Controller {

    // URL /
    public function index() {
        
        // Incluir o layout da ação
        require_once ABSPATH . 'Views/home/index.php';
    }

}