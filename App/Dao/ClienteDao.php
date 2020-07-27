<?php

namespace App\Dao;

use App\Model\Cliente;
use App\Model\Connection;
use App\Model\Log;
use Exception;

class ClienteDao
{
    public function register(Cliente $cliente)
    {
        try {
            $sql = "INSERT INTO CLIENTE(nome, email, telefone, cpf) VALUES(?,?,?,?)";
            $cmd = Connection::getConexao()->prepare($sql);
            $cmd->bindValue(1, $cliente->getNome());
            $cmd->bindValue(2, $cliente->getEmail());
            $cmd->bindValue(3, $cliente->getTelefone());
            $cmd->bindValue(4, $cliente->getCpf());
            $cmd->execute();

            $result = ["message" => "Sucesso!"];

        } catch (Exception $e) {
            $result = ["message" => "Erro ao conectar-se ao servidor de banco de dados.", "error" => "$e"];
        }
        return $result;
    }
    function list() {
        try {
            $sql = "SELECT *FROM CLIENTE";
            $cmd = Connection::getConexao()->prepare($sql);
            $cmd->execute();

            if ($cmd->rowCount() > 0):
                $result = $cmd->fetchAll(\PDO::FETCH_OBJ);
            else:
                $result = [];
            endif;
        } catch (Exception $e) {
            $result = ["message" => "Erro ao conectar-se ao servidor de banco de dados.", "error" => "$e"];
        }
        return $result;
    }
    public function consultCustomer($cod)
    {
        try {
            $sql = "SELECT *FROM CLIENTE WHERE cod = $cod";
            $cmd = Connection::getConexao()->prepare($sql);
            $cmd->execute();
            
            $result = $cmd->fetchObject('App\Model\Cliente');

        } catch (Exception $e) {
            $result = ["message" => "Erro ao conectar-se ao servidor banco de dados.", "error" => "$e"];
        }
        return $result;

    }
    public function update(Cliente $cliente)
    {
        try {
            $sql = "UPDATE CLIENTE SET nome = ? , email = ?, telefone = ?, cpf = ?
                WHERE cod = ?";
            $cmd = Connection::getConexao()->prepare($sql);
            $cmd->bindValue(1, $cliente->getNome());
            $cmd->bindValue(2, $cliente->getEmail());
            $cmd->bindValue(3, $cliente->getTelefone());
            $cmd->bindValue(4, $cliente->getCpf());
            $cmd->bindValue(5, $cliente->getCod());
            $cmd->execute();

            $result = ["message" => "Sucesso!"];

        } catch (Exception $e) {
            $result = ["message" => "Erro ao conectar-se ao servidor banco de dados.", "error" => "$e"];
            $log = new Log;
            $log->debugLog($result);
        }
        return $result;
    }
    public function delete($cod)
    {
        try {
            $sql = "DELETE FROM CLIENTE WHERE cod = ?";
            $cmd = Connection::getConexao()->prepare($sql);
            $cmd->bindValue(1, $cod);
            $cmd->execute();

            $result = ["message" => "Cliente excluído(a) com sucesso!"];
        } catch (Exception $e) {
            $result = ["message" => "Erro ao conectar-se ao servidor de banco de dados.", "error" => "$e"];
            $log = new Log;
            $log->debugLog($result);
        }
        return $result;
    }

}
