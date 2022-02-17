<?php
session_start();
$id_linhas = $_GET['id'];
include 'conexao.php';

$sql2 = " UPDATE equipamentos.linhas SET equipamentos_id_equipamentos = 0,
linha.status = 'INATIVO'
WHERE linha.equipamentos_id_equipamentos = ".$id_linhas." ;";

echo $sql2;
exit;


$result2 = $conn->query($sql2);

header('Location: chip.php');


?>