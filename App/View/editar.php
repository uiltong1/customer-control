<!DOCTYPE html>
<?php require_once '../../vendor/autoload.php';
require('../controller/ClienteController.php'); ?>
<html lang="pt">
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
    <?php $customer = $cliente->consultCustomer($_GET['customer']);?>

        <form action="?acao=atualizar&cod=<?php echo $customer->getCod();?>" method="post" onsubmit="return validarDados(this)">
        <legend>Dados do Cliente</legend>
            <label for="nome">Código:</label>
            <input type="text" name="cod" value="<?php echo $customer->getCod();?>" disabled/>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $customer->getNome();?>" placeholder="Informe o nome completo" />
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" oninput="maskCpf(this)" value="<?php echo $customer->getCpf();?>" placeholder="000.000.000-00" />
            <label for="email">E-mail</label>
            <input type="email" name="email" value="<?php echo $customer->getEmail();?>" placeholder="exemplo@exemplo.com" />
            <label for="telefone">Telefone</label>
            <input type="phone" name="telefone" oninput="maskTelefone(this)" value="<?php echo $customer->getTelefone();?>" placeholder="(XX)XXXX-XXXX" />
                <button class="cancelar">Salvar</button>
                <a href="../../index.php">Cancelar</a>
        </form>
    </div>
</body>
</html>
