<?php

class Navbar{
    public function __construct() {
        echo "
        <form class='form-control-plaintext' action='".$_SERVER['PHP_SELF']."' method='POST'>    
            <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-home' class='btn btn-link'>Home</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-caddes' class='btn btn-link'>Cadastrar Despesa</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-cadgan' class='btn btn-link'>Cadastrar Ganho</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-baxdes' class='btn btn-link'>Baixar Despesa</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-saldo' class='btn btn-link'>Saldo</button></a></li>
                    <li class='breadcrumb-item'><a href='#'><button type='submit' name='btn-extrato' class='btn btn-link'>Extrato</button></a></li>
                </ol>
            </nav>
        </form>    
                ";
    }
}