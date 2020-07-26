<?php

namespace App\Model;

class Cliente
{
    private $cod;
    private $nome;
    private $email;
    private $cpf;
    private $telefone;

    public function getCod(){
        return $this->cod;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setCod($cod){
        $this->cod = $cod;
        return $this;
    }
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }
    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

}
