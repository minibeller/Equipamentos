<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id = $_GET['id'];
$sql = "SELECT * FROM equipamentos WHERE  id_equipamentos = $id";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {


        $id_equipamentos = $row["id_equipamentos"];
        $imei = $row["imei"];
        $numero_equipamento = $row["numero_equipamento"];
        $tipo = $row["tipo"];
        $marca = $row["marca"];
        $modelo = $row["modelo"];
        $cor = $row["cor"];
        $conta_google = $row["conta_google"];
        $senha_google = $row["senha_google"];
        $linha = $row["linha"];
        $status = $row["status"];
        $observacao = $row["observacao"];
    }
}



?>
<div class="container mt-5">
    <div class='row'>

        <div class='col-sm-2'></div>
        <div class='col-sm-8'>
            <h4 class="text-center p-1" style="background-color: #3e4095;color:white">VISUALIZAR EQUIPAMENTO</h4>
            <?php
            echo "<p class='mb-1' style='background-color: #eaeaea;'> <b>ID EQUIPAMENTO:</b> " . $id_equipamentos . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>IMEI: </b>" . $imei . "</p>";

            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>NUMERO EQUIPAMENTO:</b> " . $numero_equipamento . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>TIPO: </b>" . $tipo . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>MARCA: </b>" . $marca . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>MODELO:</b> " . $modelo . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>COR:</b> " . $cor . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>CONTA GOOGLE:</b> " . $conta_google . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>SENHA GOOGLE:</b> " . $senha_google . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>LINHA: </b>" . $linha . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>STATUS: </b>" . $status . "</p>";
            echo "<p class='mb-1' style='background-color: #eaeaea;'><b>OBSERVAÇÃO: </b>" . $observacao . "</p>";


            ?>
        </div>
        <div class='col-sm-2'></div>
    </div>
    <div class="row mb-5">
    <div class='col-sm-2'></div>
        <div class="col-sm-4">
            <a type='button' style='width:100%' href='his_equipmento.php?id=<?php echo $id_equipamentos; ?>' class='btn btn-secondary'>HISTÓRICO EQUIPAMENTO</a></td>

        </div>
        <?php
        if ($status == 'ATIVO') {
            echo "
            <div class='col-sm-4'>
            <a type='button' style='width:100%' href='del_vendedor.php?id=" . $id_equipamentos . "' class='btn btn-danger'>DESVINCULAR VENDEDOR</a></td>
        </div>
            ";
        } else {
            echo "
            <div class='col-sm-4'>
            <a type='button' style='width:100%' href='add_vendedor.php?id=" . $id_equipamentos . "' class='btn btn-success'>VINCULAR VENDEDOR</a></td>           
          </div>
            ";
        }
        ?>
        <div class='col-sm-2'></div>

    </div>
</div>