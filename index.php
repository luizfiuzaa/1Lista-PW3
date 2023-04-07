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
  $email1->setEmail('carlos@gmail.com');

  $email2 = new Contato\Email();
  $email2->setEmail('carlos@hotmail.com');

  $telefone1 = new Contato\Telefone();
  $telefone1->setNumero('15 958585858');//teste 1

  $endereco1 = new Pessoa\Endereco();
  $endereco1->setLogradouro('Rua 11 de Agosto');
  $endereco1->setCidade('Tatuí');
  $endereco1->setUf('SP');
  $endereco1->setCodigo_postal('18276010');

  $professor->setNome('Carlos');
  $professor->setEmail($email1);
  $professor->setEmail($email2);
  $professor->setTelefone($telefone1);
  $professor->setEndereco($endereco1);
  /**
   * Área de Exibição de dados do professor
   */

  echo 'Professor <br>';
  echo 'Código: ' .$professor->getCodigo() . '<br>';
  echo 'Nome: ' .$professor->getNome() . '<br>';
  echo 'Email: ' .$professor->getEmail()[0]->getEmail() . '<br>';
  echo 'Email: ' .$professor->getEmail()[1]->getEmail() . '<br>';
  echo 'Telefone: ' .$professor->getTelefone()[0]->getNumero() . '<br>';
  echo 'Endereço: ' .$professor->getEndereco()[0]->getCidade() . ' - ' .$professor->getEndereco()[0]->getUf() . ' - ' .$professor->getEndereco()[0]->getLogradouro() . ' - ' .$professor->getEndereco()[0]->getCodigo_postal() . '<br>';
  echo '_____________________________________________________________ <br> <br>';

  /**
   * Área do Aluno
   */
  $aluno = new Pessoa\Aluno();
  $aluno->setCodigo(1);
  $aluno->setNome('Rogerinho Mil Grau');

  $email3 = new Contato\Email();
  $email3->setEmail('RogerinhoMG@gmail.com');

  $telefone2 = new Contato\Telefone();
  $telefone2->setNumero('15 95895895');

  $telefone3 = new Contato\Telefone();
  $telefone3->setNumero('15 99999999');
  
  $endereco2 = new Pessoa\Endereco();
  $endereco2->setLogradouro('Rua Feliz');
  $endereco2->setCidade('Tatuí');
  $endereco2->setUf('SP');
  $endereco2->setCodigo_postal('18276020');

  $endereco3 = new Pessoa\Endereco();
  $endereco3->setLogradouro('Rua Quadrada');
  $endereco3->setCidade('Tatuí');
  $endereco3->setUf('SP');
  $endereco3->setCodigo_postal('18276030');

  $aluno->setEmail($email3);
  $aluno->setTelefone($telefone2);
  $aluno->setTelefone($telefone3);
  $aluno->setEndereco($endereco2);
  $aluno->setEndereco($endereco3);
  
  /**
   * Área de exibição de dados do Aluno
   */
  
  echo 'Aluno <br>';
  echo 'Código: ' .$aluno->getCodigo() . '<br>';
  echo 'Nome: ' .$aluno->getNome() . '<br>';
  echo 'Email: ' .$aluno->getEmail()[0]->getEmail() . '<br>';
  echo 'Telefone: ' .$aluno->getTelefone()[0]->getNumero() . '<br>';
  echo 'telefone: ' .$aluno->getTelefone()[1]->getNumero() . '<br>';
  echo 'Endereço: '  .$aluno->getEndereco()[0]->getCidade() . ' - ' .$aluno->getEndereco()[0]->getUf(). ' - ' .$aluno->getEndereco()[0]->getLogradouro() . ' - '  .$aluno->getEndereco()[0]->getCodigo_postal() . '<br>';
  echo 'Endereço: ' .$aluno->getEndereco()[1]->getCidade() . ' - ' .$aluno->getEndereco()[1]->getUf(). ' - ' .$aluno->getEndereco()[1]->getLogradouro() . ' - '  .$aluno->getEndereco()[1]->getCodigo_postal() . '<br>';
?>