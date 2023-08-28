<?php
    namespace Athernos\classes;

    use Athernos\classes\Crud;

    class Ferramentas extends Crud {

        function __construct(){
            parent::__construct();            
        }

        static function verificarSessão(){
            if(!isset($_SESSION['email'])){
                // header('Location:'.BASEURL.'views/telas/login.php');
                include 'src/views/telas/login.php';
            }
            else{
                include 'src/views/index.php';
            }
        }

        static function verificarNivel(){
            if($_SESSION['nivel']< 1){
                header('Location:'.BASEURL.'index.php');

            }
        }
    }


?>