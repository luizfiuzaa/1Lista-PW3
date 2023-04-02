<?php

namespace Pessoa;

class Endereco{
    private $logradouro;
    private $cidade;
    private $uf;
    private $codigo_postal;

    function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    function getLogradouro(){
        return $this->logradouro;
    }

    function setCidade($cidade){
        $this->cidade = $cidade;
    }
    function getCidade(){
        return $this->cidade;
    }

    function setUf($uf){
        $this->uf = $uf;
    }
    function getUf(){
        return $this->uf;
    }

    function setCodigo_postal($codigo_postal){
        $this->codigo_postal = $codigo_postal;
    }
    function getCodigo_postal(){
        return $this->codigo_postal;
    }
}

?>