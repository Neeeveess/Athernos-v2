<?php 
    require_once 'vendor/autoload.php';
    use Athernos\classes\Ferramentas;

    Ferramentas::verificarSessão();


    

    use Athernos\classes\User;
    use Athernos\classes\Produtos;

    $test = new User();
    $dados = $test->listarUser();
    $prod= new Produtos();

?>
