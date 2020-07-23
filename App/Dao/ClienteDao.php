<?php

namespace App\Dao;

use App\Model\Cliente;
use App\Model\Connection;

class ClienteDao
{
    public function register(Cliente $cliente)
    {

        $sql = "INSERT INTO CLIENTE(nome, email, telefone, cpf) VALUES(?,?,?,?)";
        $cmd = Connection::getConexao()->prepare($sql);
        $cmd->bindValue(1, $cliente->getNome());
        $cmd->bindValue(2, $cliente->getEmail());
        $cmd->bindValue(3, $cliente->getTelefone());
        $cmd->bindValue(4, $cliente->getCpf());
        $cmd->execute();

    }
    function list() {

        $sql = "SELECT *FROM CLIENTE";
        $cmd = Connection::getConexao()->prepare($sql);
        $cmd->execute();

        if ($cmd->rowCount() > 0):
            $result = $cmd->fetchAll(\PDO::FETCH_OBJ);
        else:
            $result = ["message"=>"Nenhum Registro Encontrado."];
        endif;

        return $result;
    }
    public function update(Cliente $cliente)
    {

    }
    public function delete()
    {

    }

}
