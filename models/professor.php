<?php

namespace Pessoa;

class Professor{
    private $codigo = array(); 
    private $nome;
    private $email = array();
    private $telefone = array();
    private $endereco = array();

    function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    function getCodigo(){
       return $this->codigo;
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

?>