<?php

class Server {
    
    private 
    
    static function getServerName(){
        return $_SERVER["SERVER_NAME"];
    }
    
    static function getRootPath(){
        return $_SERVER["CONTEXT_DOCUMENT_ROOT"];
    }
    
    static function getPort(){
        return $_SERVER["SERVER_PORT"];
    }
    
    static function getUserAgent(){
        return $_SERVER["HTTP_USER_AGENT"];
    }
    
    static function getQueryString(){
        return $_SERVER["REQUEST_URI"];
    }
    
    static function getFile(){
        return $_SERVER["SCRIPT_FILENAME"];
    }
    
    static function getMethod(){
        return $_SERVER["REQUEST_METHOD"];
    }
    
    //Creamos dos metodos para ver si is_GET o is_POST
    static function isGet(){
        return self::getMethod()=="GET";
        //Devuelve verdader si es GET con el metodo self
    }
    static function isPost(){
        return self::getMethod()=="POST";
        //Devuelve verdader si es POST con el metodo self
    }
    
    static function getClientAddres(){
        return $_SERVER["REMOTE_ADDR"];
    }
    
    static function getClientLanguaje(){
        return $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    }
    
    static function getRequestDate($campo=null){
        date_default_timezone_set("Europe/Madrid");
        switch ($campo){
            case "Y";
                return $fech = "Año: " . date("Y",$_SERVER["REQUEST_TIME"]);
            case "M";
                return $fech = "Mes: " . date("m",$_SERVER["REQUEST_TIME"]);
            case "D";
                return $fech = "Dia: " . date("d",$_SERVER["REQUEST_TIME"]);
            case "h";
                return $fech = "Hora: " . date("H",$_SERVER["REQUEST_TIME"]);
            case "m";
                return $fech = "Minutos: " . date("i",$_SERVER["REQUEST_TIME"]);
            case "s";
                return $fech = "Segundos: " . date("s",$_SERVER["REQUEST_TIME"]);
        }
        return $_SERVER["REQUEST_TIME"];
    }
    
    
    
}
