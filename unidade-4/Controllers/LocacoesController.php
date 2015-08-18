<?php
/**
 * Controlador Locações
 */

namespace Controllers;

use Classes\Controller;

class LocacoesController extends Controller {

    // URL /locacoes
    public function index() {
        
        // Incluir o layout da ação
        require_once ABSPATH . 'Views/locacoes/index.php';
    }
    
    // URL /locacoes/form
    public function form() {
        
        // Incluir o layout da ação
        require_once ABSPATH . 'Views/locacoes/form.php';
    }

}