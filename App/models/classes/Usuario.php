<?php
/**
 * Description of usuario
 *
 * @author Ewerton
 */
require_once 'DB.php';

class Usuario{
    public $_nomeUsuario, $_loginUsuario;
    private $_senhaUsuario;
    protected $_idUsuario, $_dbUsuario, $_tabelaUsuario;

    public function __construct() { 
        $this->set_tabelaUsuario('usuarios');
        $this->_dbUsuario = DB::get_instance();
    }

    public function logar($login,$senha){
        $this->set_loginUsuario(md5($login));
        $this->set_senhaUsuario($senha);
        $parametros = [
            'conditions' => ['login = ?','senha = ?'],
            'bind' => [$this->get_loginUsuario(),$this->get_senhaUsuario()]
        ];
        $consulta = $this->_dbUsuario->find('usuarios',$parametros);
        if($consulta['0']->login == $this->get_loginUsuario() AND $consulta['0']->senha == $this->get_senhaUsuario()){
            $this->set_idUsuario($consulta['0']->id);
            $this->set_nomeUsuario($consulta['0']->nome);
            return true;
        } else {
            return false;
        }            
    }
    
    public function criar_usuario(){
        $usuario = [
            'nome'=>$this->get_nomeUsuario(),
            'login'=>$this->get_loginUsuario(),
            'senha'=>$this->get_senhaUsuario(),
            'role'=>$this->get_roleUsuario()
        ];
        $this->_dbUsuario->insert($this->get_tabelaUsuario(),$usuario);
        $this->set_idUsuario($this->_dbUsuario->get_lastInsertID());
    }
    
    public function editar_usuario(){
        $usuario = [
            'nome'=>$this->get_nomeUsuario(),
            'login'=>$this->get_senhaUsuario(),
            'senha'=>$this->get_senhaUsuario()
        ];
        $this->_dbUsuario->udate($this->get_tabelaUsuario(),$this->get_idUsuario(),$usuario);  
    }
    

    public function excluir_usuario(){
        $this->_dbUsuario->delete($this->get_tabelaUsuario(), $this->get_idUsuario());
    }
    
    public function ler_usuario($id){
        $parametros = [
            'conditions' => ['id = ?'],
            'bind' => [$id]
        ];
        $consulta = $this->_dbUsuario->find('usuarios',$parametros);
        $this->set_nomeUsuario($consulta->nome);
    }
   
    
    function get_nomeUsuario() {
        return $this->_nomeUsuario;
    }

    function get_loginUsuario() {
        return $this->_loginUsuario;
    }

    function get_senhaUsuario() {
        return $this->_senhaUsuario;
    }

    function get_idUsuario() {
        return $this->_idUsuario;
    }

    function get_tabelaUsuario() {
        return $this->_tabelaUsuario;
    }

    function set_nomeUsuario($_nomeUsuario) {
        $this->_nomeUsuario = $_nomeUsuario;
    }

    function set_loginUsuario($_loginUsuario) {
        $this->_loginUsuario = $_loginUsuario;
    }

    function set_senhaUsuario($_senhaUsuario) {
        $this->_senhaUsuario = $_senhaUsuario;
    }

    function set_idUsuario($_idUsuario) {
        $this->_idUsuario = $_idUsuario;
    }

    function set_tabelaUsuario($_tabelaUsuario) {
        $this->_tabelaUsuario = $_tabelaUsuario;
    }

}
