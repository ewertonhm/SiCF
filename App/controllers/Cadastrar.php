<?php

require_once '\..\views\views.php';
require_once '\..\models\classes.php';

class Cadastrar {
    private $_patrimonio, $_html;
    
    public function __construct() {
        $this->_html = new htCadastrar();
    }
    
    public function cadastrar($cod){
        $this->_patrimonio = new Patrimonio($cod);
        $this->_patrimonio->criar_patrimonio();
    }
}
