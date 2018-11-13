<?php

require_once 'DB.php';

class Patrimonio {
    public $_codPatrimonio, $_estado, $_desc_estado;
    protected $_dbPatrimonio, $_tabelaPatrimonio;
    
    // CONSTRUTOR
        function __construct($cod) {
        $this->set_tabelaPatrimonio('patrimonio');
        $this->set_codPatrimonio($cod);
        $this->_dbPatrimonio = DB::get_instance();
    }

    // METODOS
    public function criar_patrimonio(){
        $this->desfazimento();
        $patrimonio = [
            'codPatrimonio' =>$this->get_codPatrimonio(),
            'estado' =>$this->get_estado()
            ];
        $this->_dbPatrimonio->insert($this->get_tabelaPatrimonio(),$patrimonio);
    }
    
    public function excluir_patrimonio(){
        $this->_dbPatrimonio->delete($this->get_tabelaPatrimonio(),$this->get_codPatrimonio(),'codPatrimonio');
    }
    
    protected function alterar_patrimonio(){
        $patrimonio = [
            'estado'=>$this->get_estado()
            ];
        $this->_dbPatrimonio->update($this->get_tabelaPatrimonio(),strval($this->get_codPatrimonio()),$patrimonio,'codPatrimonio');
    }
    
    public function ler_patrimonio(){
        $parametros = [
            'conditions'=>'codPatrimonio = ?',
            'bind' =>$this->get_codPatrimonio()
        ];
        $consulta = $this->_dbPatrimonio->findFirst($this->get_tabelaPatrimonio(),$parametros);
        $this->set_estado(strval($consulta->estado));
        $this->ler_estado();                
    }
    
    protected function ler_estado(){
        $parametros = [
            'conditions' =>'codEstado = ?',
            'bind' =>$this->get_estado()
        ];
        $consulta = $this->_dbPatrimonio->findFirst('estado_patrimonio',$parametros);
        $this->set_desc_estado($consulta->descricao);
    }

        private function desfazimento(){
        $this->set_estado('1');
    }
    
    public function processo(){
        $this->set_estado('2');
        $this->alterar_patrimonio();
    }
    
    public function baixa(){
        $this->set_estado('3');
        $this->alterar_patrimonio();
    }



    // GETTERS AND SETTERS
    function get_codPatrimonio() {
        return $this->_codPatrimonio;
    }

    function get_estado() {
        return $this->_estado;
    }

    function get_tabelaPatrimonio() {
        return $this->_tabelaPatrimonio;
    }

    function set_codPatrimonio($_codPatrimonio) {
        $this->_codPatrimonio = $_codPatrimonio;
    }

    function set_estado($_estado) {
        $this->_estado = $_estado;
    }

    private function set_tabelaPatrimonio($_tabelaPatrimonio) {
        $this->_tabelaPatrimonio = $_tabelaPatrimonio;
    }
    function get_desc_estado() {
        return $this->_desc_estado;
    }

    function set_desc_estado($_desc_estado) {
        $this->_desc_estado = $_desc_estado;
    }



}
