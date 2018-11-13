<?php

class htBaixar {
    function __construct() {
        echo "
        <form class='form-inline' action='".$_SERVER['PHP_SELF']."' method='POST'>
            
            <label class='sr-only' for='inlineFormInput'>Patrimônio</label>
                <h3>Número do patrimônio:</h3> <br>
                <input type='text' class='form-control mb-2 mr-sm-2 mb-sm-0' name='codBPatrimonio'>
                <button type='submit' class='btn btn-primary' name='btn-baxpat'>Baixar</button>
        </form>
    ";
    }

    
}


