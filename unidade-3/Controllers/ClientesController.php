<?php
/**
 * Controlador Clientes
 */

namespace Controllers;

use Classes\Controller;

class ClientesController extends Controller {

    // URL /clientes
    public function index() {
        
        // Incluir o layout da ação
        require_once ABSPATH . 'Views/clientes/index.php';
    }
    
    // URL /clientes/form
    public function form() {
        
        // Incluir o layout da ação
        require_once ABSPATH . 'Views/clientes/form.php';
    }

}