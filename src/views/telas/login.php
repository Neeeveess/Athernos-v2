<?php 

use Athernos\classes\User;
if(isset($_POST['email'])and !empty($_POST['email'])){
    $email = $_POST['email'];
    $senha = md5($_POST['pass']);
    $user = new User();
    $user->login($email, $senha);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/src/assets/css/main.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/src/assets/js/script.js"></script>
    <title>Login</title>
</head>
<body class="body-login">
    <form method="post" class="form" autocomplete="off">
        <img src="<?php $_SERVER['DOCUMENT_ROOT']?>/Athernos/src/assets/imgs/logo-teste.png" alt="">
        <h1>Login</h1>
        <?php

            if(!isset($_GET['msg'])){
        ?>
        <div class="div-alert">
        
        </div>
            <script>showMessage("E-mail ou senha inválidas!", "danger");</script>>
        <?php
            }
        ?>
        <div class="textfield">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
            <g>
                <circle cx="256" cy="128" r="128"/>
                <path d="M256,298.667c-105.99,0.118-191.882,86.01-192,192C64,502.449,73.551,512,85.333,512h341.333   c11.782,0,21.333-9.551,21.333-21.333C447.882,384.677,361.99,298.784,256,298.667z"/>
            </g>
        </svg>
            <input class="input2" type="text" name="email" required>
            <span class="focus-input2" data-placeholder="Email"></span>
        </div>
        <div class="textfield">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512" height="512">
            <g>
                <path d="M405.333,179.712v-30.379C405.333,66.859,338.475,0,256,0S106.667,66.859,106.667,149.333v30.379   c-38.826,16.945-63.944,55.259-64,97.621v128C42.737,464.214,90.452,511.93,149.333,512h213.333   c58.881-0.07,106.596-47.786,106.667-106.667v-128C469.278,234.971,444.159,196.657,405.333,179.712z M277.333,362.667   c0,11.782-9.551,21.333-21.333,21.333c-11.782,0-21.333-9.551-21.333-21.333V320c0-11.782,9.551-21.333,21.333-21.333   c11.782,0,21.333,9.551,21.333,21.333V362.667z M362.667,170.667H149.333v-21.333c0-58.91,47.756-106.667,106.667-106.667   s106.667,47.756,106.667,106.667V170.667z"/>
            </g>
        </svg>
            <input class="input2" type="password" name="pass" required>
            <span class="focus-input2" data-placeholder="Senha"></span>
        </div>
        <input type="submit">
        
    </form>
    
</body>
</html>