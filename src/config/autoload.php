<?php
spl_autoload_register(function(string $nomeCompletoDaClasse){

    $caminhoDaClasse = str_replace('Athernos','', $nomeCompletoDaClasse);
    $caminhoDaClasse = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoDaClasse);

    $caminhoDaClasse = getcwd() . $caminhoDaClasse . '.php';

    if(file_exists($caminhoDaClasse)){
        require_once $caminhoDaClasse;
    }
});