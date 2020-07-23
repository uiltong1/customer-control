<?php
require_once 'vendor/autoload.php';

$cliente = new \App\Model\Cliente;
$cliente2 = new \App\Model\Cliente;

$cliente->setNome('João carlos');
$cliente->setCpf('033.523.333-08');
$cliente->setEmail('jc@gmail.com');
$cliente->setTelefone('(71)98451-5412');

$cliente2->setNome('Marcos Dantas');
$cliente2->setCpf('021.254.854-32');
$cliente2->setEmail('mdantas@hotmail.com');
$cliente2->setTelefone('(73)98121-2254');

$clienteDap = new \App\Dao\ClienteDao;
$clienteDap->register($cliente);
$clienteDap->register($cliente2);


$clienteDao = new \App\Dao\ClienteDao;
echo json_encode($clienteDap->list());