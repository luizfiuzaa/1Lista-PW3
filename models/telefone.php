<?php
  namespace Contato;

  class Telefone{
    private $telefone;

    function setTelefone($telefone){
      $this->telefone = $telefone;
  }
  function getTelefone(){
      return $this->telefone;
  }
  }
?>