<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id_supervisores = $_POST['id_supervisores'];
$nome_supervisor = $_POST['nome_supervisor'];
$regiao = $_POST['regiao'];

$sql = "UPDATE supervisores SET nome_supervisor = '".$nome_supervisor."',
regiao = '".$regiao."'
WHERE id_supervisores = '".$id_supervisores."';";

$sql2 = "UPDATE historico SET supervisor ='".$nome_supervisor."'
WHERE supervisores_id_supervisores = $id_supervisores";

echo $sql;


if ($conn->query($sql) == TRUE) {


    if ($conn->query($sql2) === TRUE) {
        header("Location: vendedor.php");

    } else {
    echo "Error updating record: " . $conn->error;
  }
  } else {
    echo "Error updating record: " . $conn->error;
  }