<?php 
require_once 'models/classes.php';
require_once 'views/views.php';
require_once 'controllers/controllers.php';

$head = new Head('SiCF - Sistema de Controle Financeiro');
$navbar = new Navbar();

// CADASTRAR DESPESA ----------------------------------------------------------------
if(isset($_POST['btn-caddes'])){
    echo "<main role='main' class='container'>";
        $head->setTitle('Cadastrar Despesas');
        echo "<h1>".$head->getTitle()."</h1>";
    echo "</main>"; 
}

// CADASTRAR GANHO -----------------------------------------------------------------
elseif(isset($_POST['btn-cadgan'])){
    echo "<main role='main' class='container'>";
        $head->setTitle('Cadastrar Ganhos');
        echo "<h1>".$head->getTitle()."</h1>";
    echo "</main>"; 
}

// BAIXAR DESPESA -------------------------------------------------------------------
elseif(isset($_POST['btn-baxdes'])){
    echo "<main role='main' class='container'>";
        $head->setTitle('Baixar Despesas');
        echo "<h1>".$head->getTitle()."</h1>";
    echo "</main>"; 
}

// SALDO -----------------------------------------------------------------
elseif(isset($_POST['btn-saldo'])){
    echo "<main role='main' class='container'>";
        $head->setTitle('Saldo');
        echo "<h1>".$head->getTitle()."</h1>";
    echo "</main>"; 
}

// EXTRATO -----------------------------------------------------------------
elseif(isset($_POST['btn-extrato'])){
    echo "<main role='main' class='container'>";
        $head->setTitle('Extrato');
        echo "<h1>".$head->getTitle()."</h1>";
    echo "</main>"; 
}

// INDEX ---------------------------------------------------------------------------
else{
    echo "<main role='main' class='container'>";
        echo "<h2>".$head->getTitle()."</h2>";
        
    
    echo "</main>"; 
}

$footer = new Footer();
?>