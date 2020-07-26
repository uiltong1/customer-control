<?php
require_once 'vendor/autoload.php';
echo '<link rel="stylesheet" type="text/css" href="public/css/style.css"/>';
require_once 'app/view/home.php';
// require_once 'app/controller/ClienteController.php';
use Monolog\Handler\StreamHandler;
// use Monolog\Handler\BrowserConsoleHandler;
// use Monolog\Logger;

// $logger = new Logger("web");
//$logger->pushHandler(new BrowserConsoleHandler(Logger::DEBUG));
// $logger->pushHandler(new StreamHandler(__DIR__."/log.txt", Logger::WARNING));

// $logger->warning("Cliente Deletado:", ["Cliente: "=>$nome, ""]);
//$logger->debug("Teste de log",["logger"=>true]);

// $cliente = new \App\Model\Cliente;
// $cliente = new \App\Model\Cliente;

// $cliente->setNome('João carlos');
// $cliente->setCpf('033.523.333-08');
// $cliente->setEmail('jc@gmail.com');
// $cliente->setTelefone('(71)98451-5412');

// $logger = new \App\Model\Log;

// $logger->emergencyLog('teste');


// $cliente2->setNome('Marcos Dantas');
// $cliente2->setCpf('021.254.854-32');
// $cliente2->setEmail('mdantas@hotmail.com');
// $cliente2->setTelefone('(73)98121-2254');

// $clienteDap = new \App\Dao\ClienteDao;
// $clienteDap->register($cliente);
// $clienteDap->register($cliente2);


// $clienteDao = new \App\Dao\ClienteDao;
// echo json_encode($clienteDap->list());