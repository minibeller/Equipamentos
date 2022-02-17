<?php
session_start();
include 'conexao.php';
include 'menu.php';

$id = $_GET['id'];
$sql = "DELETE FROM historico WHERE equipamentos_id_equipamentos = $id";
$result = $conn->query($sql);
$sql = "DELETE FROM equipamentos WHERE id_equipamentos = $id";
$result = $conn->query($sql);

header('Location: index.php');