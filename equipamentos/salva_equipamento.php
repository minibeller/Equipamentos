<?php
session_start();
include 'conexao.php';
include 'menu.php';
$imei = $_POST['imei'];
$numero_equipamento = $_POST['numero_equipamento'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$conta_google = $_POST['conta_google'];
$senha_google = $_POST['senha_google'];
$numero_linha = $_POST['numero_linha'];
$linha = $_POST['linha'];
$status = $_POST['status'];
$tipo = $_POST['tipo'];
$observacao = $_POST['observacao'];

$sql = "INSERT INTO equipamentos (
imei,
numero_equipamento,
marca,
modelo,
cor,
conta_google,
senha_google,
linha,
status,
tipo,
observacao)
VALUES (
'$imei',
'$numero_equipamento',
'$marca',
'$modelo',
'$cor',
'$conta_google',
'$senha_google',
'$linha',
'$status',
'$tipo',
'$observacao')
";


if ($conn->query($sql) === TRUE) {
  header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}