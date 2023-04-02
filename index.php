<?php
  include './models/aluno.php';
  include './models/professor.php';
  include './models/endereco.php';
  include './models/email.php';
  include './models/telefone.php';

  $aluno = new Pessoa\Aluno();
  
  $aluno->setNome('Aluno Batuta');
  $telefone1->setTelefone('15 99999999');
  $telefone2->setTelefone('15 95895895');

  
?>