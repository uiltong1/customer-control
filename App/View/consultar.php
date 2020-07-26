<!DOCTYPE html>
<?php require_once '../../vendor/autoload.php';
require('../controller/ClienteController.php'); ?>
<html lang="pt">
<head>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css"/>
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

        <form>
        <legend>Dados do Cliente</legend>
            <label for="nome">Código:</label>
            <input type="text" name="nome" value="<?php echo $customer->getCod();?>" placeholder="Informe o nome completo" disabled/>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $customer->getNome();?>" placeholder="Informe o nome completo" disabled/>
            <label for="nome">CPF:</label>
            <input type="text" name="cpf" value="<?php echo $customer->getCpf();?>" placeholder="000.000.000-00" disabled/>
            <label for="email">E-mail</label>
            <input type="email" value="<?php echo $customer->getEmail();?>" placeholder="exemplo@exemplo.com" disabled/>
            <label for="telefone">Telefone</label>
            <input type="phone" value="<?php echo $customer->getTelefone();?>" placeholder="(XX)XXXX-XXXX" disabled/>
                <a class="voltar" href="../../index.php">Voltar</a>
        </form>
    </div>
</body>
</html>
