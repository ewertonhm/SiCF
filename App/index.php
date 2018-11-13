<?php 

    // server root
    $_GLOBALS['root'] = 'http://sicf.local/';
    // Controlers Folder
    $controldir = 'controllers';
    // Default Controller (index)
    $default = 'login';
    
    if($_GET == NULL){
        require_once $controldir.'/'.$default.'.php';
        $default = new $default;
    }
    
?>