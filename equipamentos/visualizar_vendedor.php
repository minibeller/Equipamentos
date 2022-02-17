<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id = $_GET['id'];
$sql = "SELECT * FROM historico WHERE  id_historico = $id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {


        $id_historico = $row["id_historico"];
        $nome_representante = $row["nome_representante"];
        $atuacao = $row["atuacao"];
        $supervisor = $row["supervisor"];
        $data_configuracao = $row["data_configuracao"];
        $data_desligamento = $row["data_desligamento"];
        $observacao = $row["observacao"];
        $equipamentos_id_equipamentos = $row["equipamentos_id_equipamentos"];
      
    }
}



?>
<div class="container mt-5">
    <div class='row'>
        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
            <h4 class="text-center p-1" style="background-color: #3e4095;color:white">VISUALIZAR VENDEDOR</h4>
            <?php
            echo "<p class='mb-1' style='background-color: #eaeaea;'> <b>ID EQUIPAMENTO:</b> " . $id_historico . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>IMEI: </b>" . $nome_representante . "</p>";

            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>NUMERO EQUIPAMENTO:</b> " . $atuacao . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>TIPO: </b>" . $supervisor . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>MARCA: </b>" . $data_configuracao . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>MODELO:</b> " . $data_desligamento . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>COR:</b> " . $observacao . "</p>";


            ?>
        </div>
        <div class='col-sm-2'></div>
    </div>
    <div class="row mb-5">
    <div class='col-sm-2'></div>
        <div class="col-sm-4 mt-3">
            <a type='button' style='width:100%' href='visualizar_equipamento.php?id=<?php echo $equipamentos_id_equipamentos; ?>' class='btn btn-secondary'>VER EQUIPAMENTO</a></td>

        </div>
        
        <div class='col-sm-2'></div>

    </div>
</div>