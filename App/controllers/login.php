<?php

require_once $GLOBALS['root'].'/models/classes.php';
require_once $GLOBALS['root'].'/assets/lib.php';

class _login {
    function __construct(){
        if(!isset($_SESSION)):
            session_start();
        endif;

        if(isset($_POST['btn-entrar'])){
            //array para exibir os avisos
            $erros = array();

            if(empty($_POST['login']) OR empty($_POST['senha'])){
                $erros[] = "<li> O campo login e senha precias ser preenchido </li>";
            } else {
                $usuario = new Usuario();
                if($usuario->logar(cleanstring($_POST['login']),cleanstring($_POST['senha']))){
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $usuario->get_idUsuario();
                    if(!empty($_POST["remember"])){
                        setcookie("login",$_POST["login"],time()+ (10 * 365 * 24 * 60 * 60));
                        setcookie("senha",$_POST["senha"],time()+ (10 * 365 * 24 * 60 * 60));                        
                    } else {
                        if(isset($_COOKIE["login"])){
                            setcookie("login","");
                        }
                        if(isset($_COOKIE["senha"])){
                            setcookie("senha","");	
                        }
                    }
                    header('session.php');
                } else {
                    $erros[] = "<li> Usuário ou senha incorretos</li>";
                }
            }   
        }  
    }
    function callview(){
        require_once 'views';
    }
}

