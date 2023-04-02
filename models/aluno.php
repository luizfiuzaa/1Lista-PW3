<?php

namespace Pessoa;

class Aluno{
    private $codigo;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;

    function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    function getCodigo(){
        $this->codigo;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }

    function setEmail($email){
        $this->email = $email;
    }
    function getEmail(){
        return $this->email;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    function getTelefone(){
        return $this->telefone;
    }

    function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    function getEndereco(){
        return $this->endereco;
    }
}
