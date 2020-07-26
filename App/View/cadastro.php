<!DOCTYPE html>
<?php require_once '../../vendor/autoload.php';
require('../controller/ClienteController.php'); ?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css"/>
    <script src="../../public/js/script.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="../../index.php">Customer Control</a>
    </header>
    <div class="cadastro">
        <form action="?acao=inserir" method="post" onsubmit="return validarDados(this)" >
        <legend>Ficha cadastral do cliente</legend>
            <!-- <label for="nome">Nome:</label> -->
            <?php $message; ?>
            <input type="text" value="" name="nome" placeholder="Informe o nome completo"/>
            <!-- <label for="nome">CPF:</label> -->
            <input type="text" name="cpf" placeholder="000.000.000-00"/>
            <!-- <label for="email">E-mail</label> -->
            <input type="email" name="email" placeholder="exemplo@exemplo.com" />
            <!-- <label for="telefone">Telefone</label> -->
            <input type="phone" name="telefone" placeholder="(XX)XXXX-XXXX" />
            <button type="submit" >Salvar</button>
            <a href="../../index.php">Cancelar</a>
        </form>
    </div>
</body>
</html>
