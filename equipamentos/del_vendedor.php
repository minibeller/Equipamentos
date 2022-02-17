<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id = $_GET['id'];
$hoje = date('Y/m/d');

$sql = "UPDATE equipamentos SET status='INATIVO' WHERE id_equipamentos = $id";
$sql2 = "UPDATE historico SET data_desligamento='$hoje' WHERE equipamentos_id_equipamentos = $id";
$result = $conn->query($sql);
$result = $conn->query($sql2);

header("Location: visualizar_equipamento.php?id=".$id."");



?>