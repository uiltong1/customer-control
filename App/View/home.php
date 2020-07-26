<!DOCTYPE html>
<html lang="pt">
<?php include('app/controller/ClienteController.php');?>
<head>
    <link rel="stylesheet" type="text/css" href="../../public/css/style.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="index.php">Customer Control</a>
    </header>
    <div class="titulos">
        <div><h2>Lista de Clientes</h2></div>
        <div><a href="app/view/cadastro.php">Novo</a></div>
    </div>
    <div class="painel">
        <table class="table-customer">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($cliente->list() as $index=>$value){?>
                 <tr>
                    <td><?php echo $value->cod;?></td>
                    <td><?php echo $value->nome;?></td>
                    <td><?php echo $value->cpf;?></td>
                    <td><a href="app/view/consultar.php?customer=<?= $value->cod ?>">Consultar</a>
                    <a href="app/view/editar.php?customer=<?= $value->cod ?>">Editar</a>
                   <a href="?acao=delete&customer=<?= $value->cod ?>">Excluir</a></td>
                </tr>
                <?php };?>
            </tbody>
        </table>
    </div>
</body>
</html>
