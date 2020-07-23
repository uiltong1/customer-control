<?php
require_once 'vendor/autoload.php';

$cliente = new \App\Model\Cliente;

// $cliente->setNome('Marta');
// $cliente->setCpf('025.244.452-23');
// $cliente->setEmail('teste@teste.com.br');
// $cliente->setTelefone('(71)99351-5493');

// $clienteDap = new \App\Dao\ClienteDao;
// $clienteDap->register($cliente);


$clienteDao = new \App\Dao\ClienteDao;

echo json_encode($clienteDao->list());