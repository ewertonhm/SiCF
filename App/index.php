<?php 
require_once 'models/classes.php';
require_once 'views/views.php';
require_once 'controllers/controllers.php';

$head = new Head('SiCF');
$navbar = new Navbar();


// CADASTRAR ----------------------------------------------------------------
if(isset($_POST['btn-cadpat'])){
    echo "<p>Patrimonio ".$_POST['codPatrimonio']." cadastrado.</p>";
    $cadastro = new Cadastrar();
    $cadastro->cadastrar($_POST['codPatrimonio']);
    
}

if(isset($_POST['btn-cadastrar'])){
    echo "<main role='main' class='container'>";
        $cadastro = new Cadastrar();
    echo "</main>"; 
}

// CONFERIR -----------------------------------------------------------------
if(isset($_POST['btn-conferir'])){
    echo "<main role='main' class='container'>";
        
    echo "</main>"; 
}

// BAIXAR -------------------------------------------------------------------
if(isset($_POST['btn-baxpat'])){
    echo "<p> Patrimonio ".$_POST['codBPatrimonio']." baixado </p>";
    $baixa = new Baixar();
    $baixa->baixar($_POST['codBPatrimonio']);
}

if(isset($_POST['btn-baixar'])){
    echo "<main role='main' class='container'>";
        $baixa = new Baixar();
    echo "</main>"; 
}

$footer = new Footer();
?>