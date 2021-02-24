<?php
include_once("config/url.php");
include_once("config/process.php");

if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
    <title>Tela de Login</title>
</head>

<body>
    <div id="main-container">
    
    <?php if(isset($printMsg) && $printMsg != ""): ?>
            <p id="msg"><?=$printMsg ?></p>
        <?php endif; ?>

        <h1>Cadastre-se para acessar o sistema</h1>
        
        <form id="register-form" action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="full-box">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="Informe o seu email" >
            </div>
            <div class="half-box spacing">
                <label for="nome">Nome</label>
                <input type="text" name="name" id="name" placeholder="Informe o seu nome" >
            </div>
            <div class="half-box">
                <label for="lastname">Sobrenome</label>
                <input type="text" name="lastname" id="lastname" placeholder="Informe o seu sobrenome" >
            </div>
            <div class="half-box spacing">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" placeholder="Informe sua senha" >
            </div>
            <div class="half-box">
                <label for="lastname">Confirme sua senha</label>
                <input type="password" name="password" id="password" placeholder="Confirme sua senha" >
            </div>
            <div id="full-box">
                <input type="checkbox" name="agreements" id="agreements">
                <label for="agreements" id="agreements-label"> Eu li e aceito os <a href="">termos e condições</a></label>
            </div>
            <div class="full-box">
                <input type="submit" name="btn-button" id="btn-submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>