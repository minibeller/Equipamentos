<?php
session_start();
include 'conexao.php';
include 'menu.php';

$id_equipamentos = $_POST["id_equipamentos"];
$imei = $_POST["imei"];
$numero_equipamento = $_POST["numero_equipamento"];

$tipo = $_POST["tipo"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];

$cor = $_POST["cor"];
$conta_google = $_POST["conta_google"];
$senha_google = $_POST["senha_google"];
$linha = $_POST["linha"];
$status = $_POST["status"];
$observacao = $_POST["observacao"];

$sql = "UPDATE equipamentos 
SET 
imei = '$imei',
numero_equipamento = '$numero_equipamento',

tipo = '$tipo',
marca = '$marca',
modelo = '$modelo',
cor = '$cor',
conta_google = '$conta_google',
senha_google = '$senha_google',
linha = '$linha',
status = '$status',
observacao = '$observacao'

WHERE id_equipamentos = 
$id_equipamentos";
$result = $conn->query($sql);

header('Location: index.php');