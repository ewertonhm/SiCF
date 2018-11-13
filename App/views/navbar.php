<?php

class Navbar{
    public function __construct() {
        echo "
        <form class='form-control-plaintext' action='".$_SERVER['PHP_SELF']."' method='POST'>    
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-cadastrar' class='btn btn-link'>Cadastrar</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-conferir' class='btn btn-link'>Conferir</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-baixar' class='btn btn-link'>Baixar</button></a></li>
                </ol>
            </nav>
        </form>    
                ";
    }
}