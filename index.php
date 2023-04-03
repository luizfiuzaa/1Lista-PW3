<?php
  include './models/aluno.php';
  include './models/professor.php';
  include './models/endereco.php';
  include './models/email.php';
  include './models/telefone.php';

  /**
   * Área do professor
   */
  $professor = new Pessoa\Professor();
  $professor->setCodigo(1);
  $email1 = new Contato\Email();
  $email1->setEmail('carlao.xj6@email.com');

  $email2 = new Contato\Email();
  $email2->setEmail('carlao1kgrau@email.com');

  $telefone1 = new Contato\Telefone();
  $telefone1->setTelefone('15 99999999');

  $endereco1 = new Pessoa\Endereco();
  $endereco1->setLogradouro('Rua Animosidade Extrema');

  $professor->setNome('Carlão da XJ6');
  $professor->setEmail($email1);
  $professor->setEmail($email2);
  $professor->setTelefone($telefone1);
  /**
   * Exibição de dados do professor
   */


  
  /**
   * Área do Aluno
   */
  $aluno = new Pessoa\Aluno();
  $aluno->setNome('Aluno Batuta');

  $email3 = new Contato\Email();
  $email3->setEmail('AlunoB@email.com');

  $telefone2 = new Contato\Telefone();
  $telefone2->setTelefone('15 95895895');

  $telefone3 = new Contato\Telefone();
  $telefone3->setTelefone('15 60606009');
  
  $endereco2 = new Pessoa\Endereco();
  $endereco2->setLogradouro('Rua Jorginho Rei Delas');

  $endereco3 = new Pessoa\Endereco();
  $endereco3->setLogradouro('Rua da Carência');

  /**
   * Área de exibição de dados do Aluno
   */
?>