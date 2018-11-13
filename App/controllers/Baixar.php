<?php

require_once '\..\views\views.php';
require_once '\..\models\classes.php';

class Baixar {
    private $_patrimonio, $_html;
    
    public function __construct() {
        $this->_html = new htBaixar();
    }
    
    public function baixar($cod){
        $this->_patrimonio = new Patrimonio($cod);
        $this->_patrimonio->baixa();
    }
}
