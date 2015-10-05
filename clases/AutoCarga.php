<?php

//newPHPclass
//Subir todas la cosas a GITHUB 
//Enviar el cvegaex@hotmail.com
//Hola soy tañ...
class AutoCarga {
    static function cargar($clase){
        //Busco la clase. Debería poner si existe
        //$archivo = "clases/".$clase. ".php";
        //require $archivo;
       
        //Con esto sigue 
        $clase = str_replace("\\", "/", $clase);
        $archivo = "clases/".$clase. ".php";
        require $archivo;
    }
}
spl_autoload_register('AutoCarga::cargar');
