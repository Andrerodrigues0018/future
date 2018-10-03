<?php

date_default_timezone_set('America/Sao_Paulo');
include 'conexao.php';

$stmt = $pdo->prepare('INSERT INTO inscritos VALUES(:id,:nome,:email,:tel ,:curso ,:fluencia ,:horario ,:data_insc )');
  $stmt->execute(array(
    ':id' => '',
    ':nome' => $_POST['nome'],
    ':email' => $_POST['email'],
    ':tel' => $_POST['tel'],
    ':curso' => $_POST['curso'],
    ':fluencia' => $_POST['fluencia'],
    ':horario' => $_POST['horario'],
    ':data_insc' => date('Y-m-d H:i')
));
/*
 
echo "\nPDOStatement::errorInfo():\n";
$arr = $stmt->errorInfo();
print_r($arr);
*/
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
    color:#333;
    font-family:segoe;
  }
</style>
<div>
  <link type="text/css" rel="stylesheet" href="_fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <h1>Dados aprovados com sucesso! <i style="color:#2ECC71" class="fa fa-check-circle" aria-hidden="true"></i></h1> 
  <p>
   <?= $nome ?>, aguarde uma nova mensagem em seu email <b> <?= $email ?> </b> confirmando os dados.
  </p>
</div>