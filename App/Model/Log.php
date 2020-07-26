<?php

namespace App\Model;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class Log
{
    public function systemLog(Cliente $cliente, $action)
    {
        $logger = new Logger("report");
        $logger->pushHandler(new StreamHandler(__DIR__ . "..\\..\\..\\var\\log\\system.log"));

        $logger->info("$action:", ["Nome" => $cliente->getNome(), "CPF" => $cliente->getCpf(), "Email" => $cliente->getEmail(),
            "Telefone" => $cliente->getTelefone()]);
    }
    public function exceptionLog($value)
    {
        $logger = new Logger("report");
        $logger->pushHandler(new StreamHandler(__DIR__ . "..\\..\\..\\var\\log\\exception.log"));

        $logger->critical("Erro: ", ["exception" => $value]);
    }
    public function debugLog($value){

        $logger = new Logger("report");
        $logger->pushHandler(new StreamHandler(__DIR__ . "..\\..\\..\\var\\log\\debug.log"));

        $logger->debug("Erro: ", ["exception" => $value]);
    }
    public function emergencyLog($value){

        $logger = new Logger("report");
        $logger->pushProcessor(function ($record) {
            $record["extra"]["HTTP_HOST"] = $_SERVER["HTTP_HOST"];
            $record["extra"]["REQUEST_URI"] = $_SERVER["REQUEST_URI"];
            $record["extra"]["REQUEST_METHOD"] = $_SERVER["REQUEST_METHOD"];
            $record["extra"]["HTTP_USER_AGENT"] = $_SERVER["HTTP_USER_AGENT"];
            return $record;
        });
        $logger = new Logger("report");
        $logger->pushHandler(new StreamHandler(__DIR__ . "..\\..\\..\\var\\log\\emergency.log"));

        $logger->emergency("Erro: ", ["exception" => $value]);

    }
}
