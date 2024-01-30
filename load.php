<?php

//carga clkase automaticamente
echo __DIR__;
//nombre calse esatmos tulizando obtiene
spl_autoload_register(function($clase){
//codgio calse incluir obtengo directoriao actual de atuload
    $file=__DIR__."/".$CLASE.".php";
    $file=str_replace("\\","/",$file);

    if(is_file($file)){
        require_once $file;
    }
});


?>