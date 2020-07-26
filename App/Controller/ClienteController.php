<?php

use App\Dao\ClienteDao;
use App\Model\Cliente;
use App\Model\Log;

$cliente = new ClienteDao;

if(isset($_GET['acao'])){
switch($_GET['acao']){
    case 'inserir':
        insertCustomer($cliente);
    break;
    case 'atualizar':
        updateCustomer($cliente);
    break;
    case 'delete':
        deleteCustomer($cliente);
    break;
}
}
function updateCustomer($cliente){
  $log = new Log;
  $customer = new Cliente;
  $customer->setCod($_GET['cod']);
  $customer->setCpf($_POST['cpf']);
  $customer->setNome($_POST['nome']);
  $customer->setEmail($_POST['email']);
  $customer->setTelefone(($_POST['telefone']));
  $log->systemLog($customer, 'Dados do Cliente foi alterado');
  echo" <script>alert('Dados atualizados com sucesso!')
                history.go(-1);</script>";
}

function insertCustomer($cliente){
    $customer = new Cliente;
    $customer->setCpf($_POST['cpf']);
    $customer->setNome($_POST['nome']);
    $customer->setEmail($_POST['email']);
    $customer->setTelefone(($_POST['telefone']));
    $cliente->register($customer);
}
function deleteCustomer($cliente){   
    $customer = $cliente->consultCustomer($_GET['customer']);
    $log = new Log;
    $log->systemLog($customer, 'Cliente Excluido');
    $cliente->delete($_GET['customer']);
}
