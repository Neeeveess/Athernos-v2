<?php 

namespace Athernos\config;
use mysqli;
use Exception;

    if ( empty($_SERVER['SERVER_NAME']) || preg_match('/edu.br/', $_SERVER['SERVER_NAME'])  ) {
        if ( !defined('BASEURL') )
            define('BASEURL', "/".'Athernos/');
            define('DB_NAME', 'athernos');
            define('DB_USER', 'athernos');
            define('DB_PASSWORD', 'qo)Aq1.Z');
            define('DB_HOST', 'localhost');
    }else{
        if ( !defined('BASEURL') )
            define('BASEURL', "/".'Athernos/');
            define('DB_NAME', 'athernos');
            define('DB_USER', 'root');
            define('DB_PASSWORD', '');
            define('DB_HOST', 'localhost');  
    }

    abstract class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }
        function connectDatabase(){
            try{
                $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
            }
            catch (Exception $e){
                $error = $e->getMessage();
                echo $error;
                die();
            }
        }
    }
?>