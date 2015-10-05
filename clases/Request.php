<?php

/**
 * Description of Request: Clase que va a pedir los datos y va a validar si
 * ellos existen
 * @author Juanka
 */

class Request {
    //es un metodo de Clase
    static function get ($nombre, $indice=null){
        if (isset($_GET[$nombre])){
            return $_GET[$nombre];
        }
        return null;
        //Devuelvo null PORQUE es el único valor que significa que no ha llegado!!!
    }
    
    static function post ($nombre, $indice=null){
        if (isset($_POST[$nombre])){
            return $_POST[$nombre];
        }
        return null;
        //Devuelvo null PORQUE es el único valor que significa que no ha llegado!!!
    }
    //Me traigo la clase Server para ver que me devuelve con los nuevos metodos
    //isGet o isPost
    //Pero se puede enviar por Post y sea variable GET!!
    static function req($nombre) {
        if (Server::isPost() && self::post($nombre) != null) {
            return self::post($nombre);

            //Hay que poner el return, porque sino lo devuelve dentro del 
            //metodo y no fuera;
        }
        //Sino entra en el IF es una variable GET
        return self::get($nombre);
    }

    static function requestV2($nombre) {
        if (Server::isPost()) {
            if (self::post($nombre) != null) {
                return self::post($nombre);
            } else {
                //Si llega por Post pero era una variable GET
                return self::get($nombre);
            }

            //Hay que poner el return, porque sino lo devuelve dentro del 
            //metodo y no fuera;
        }
        //Sino entra en el IF es una variable GET
        return self::get($nombre);
    }

}
