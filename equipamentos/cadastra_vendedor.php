<?php
session_start();
include 'conexao.php';
include 'menu.php';

/*ATIVANDO STATUS DO EQUIPAMENTO */

$nome_representante = $_POST['nome_representante'];
$supervisor = $_POST['supervisor'];
$atuacao  = $_POST['atuacao'];
$data_configuracao  = $_POST['data_configuracao'];
$data_desligamento  = $_POST['data_desligamento'];
$observacao  = $_POST['observacao'];
$equipamentos_id_equipamentos  = $_POST['id_equipamentos'];

$sql = "INSERT INTO historico (nome_representante,
supervisor,
atuacao,
data_configuracao,
data_desligamento,
observacao,
equipamentos_id_equipamentos,
supervisores_id_supervisores)
VALUES ('$nome_representante',
'$supervisor',
'$atuacao',
'$data_configuracao',
'$data_desligamento',
'$observacao',
$equipamentos_id_equipamentos,
$supervisor)";

if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE equipamentos SET status='ATIVO' WHERE id_equipamentos = $equipamentos_id_equipamentos";
    $result = $conn->query($sql);
    header("Location: visualizar_equipamento.php?id=".$equipamentos_id_equipamentos."");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
