<?php

date_default_timezone_set('America/Sao_Paulo');
include 'conexao.php';

$stmt = $pdo->prepare('INSERT INTO contatos VALUES(:id,:nome,:email,:tel ,:data_insc, :mensagem)');
  $stmt->execute(array(
    ':id' => '',
    ':nome' => $_POST['nome'],
    ':email' => $_POST['email'],
    ':tel' => $_POST['tel'],
    ':data_insc' => date('Y-m-d H:i'),
    ':mensagem' => $_POST['mensagem']
));

 /*
echo "\nPDOStatement::errorInfo():\n";
$arr = $stmt->errorInfo();
print_r($arr); */
?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:900" rel="stylesheet">
<style>
  @font-face {
    font-family: segoe;
    src: url(_fonts/segoe.ttf)
}
  *{
    margin:0;
  }
  body{
    background-color:#3498DB;
  }
  div{
    background-color:white;
    width:80%;
    float:left;
    margin:10%;
    margin-top:10%;
    height:auto;
    padding:30px;

  }
  h1{
    color:#333;
    font-size:45pt;
    font-weight:600;
    text-align:justify;
    font-family:roboto;
  }
  p{
    font-size:15pt;
    font-weight:100;
    color:#95A5A6;
    font-family:segoe;
  }
</style>
<div>
  <h1>Dados coletados com sucesso! <i></i></h1> 
  <p>
   <?= $nome ?>, aguarde uma nova mensagem em seu email <b> <?= $email ?> </b> confirmando os dados.
  </p>
</div>