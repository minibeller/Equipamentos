<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id = $_GET['id'];
$sql2 =  "SELECT * FROM supervisores";
$result2 = $conn->query($sql2);



?>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="cadastra_vendedor.php" method='POST'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='text-center mb-2' style="background-color: #3e4095;color: white;">ADICIONAR UMA VENDEDOR AO EQUIPAMENTO</h4>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">NOME REPRESETANTE</span>
                            <input type="text" class="form-control" name="nome_representante" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <select class="form-select" name="supervisor" aria-label="Default select example">
                            <option selected="">SUPERVISOR</option>
                            <?php
                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while ($row2 = $result2->fetch_assoc()) {
                                    echo "
                            <option value='" . $row2["id_supervisores"] . "'>" . $row2["nome_supervisor"] . "</option>";
                                }
                            }

                            ?>


                        </select>

                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">DATA CONFIGURAÇÃO</span>
                            <input type="date" class="form-control" name="data_configuracao" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">DATA DESLIGAMENTO</span>
                            <input type="date" class="form-control" name="data_desligamento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>




                </div>
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">ATUAÇÃO</span>
                            <select class="form-select form-select-sm" name="atuacao" aria-label=".form-select-sm example">
                                <option selected>INTERIOR OU CAPITAL</option>
                                <option value="INTERIOR">INTERIOR</option>
                                <option value="CAPITAL">CAPITAL</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="form-floating">
                            <textarea class="form-control" name="observacao" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">OBSERVAÇÃO</label>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6 mt-2'>
                        <div class="input-group input-group-sm mb-3">
                            <input type="hidden" class="form-control" name="id_equipamentos" value="<?php echo $id ?>">
                        </div>
                        <button type="submit" style="width: 100%;" class="btn btn-success">CADASTRAR</button>
                    </div>
                    <div class='col-sm-6'>

                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-2">

        </div>
    </div>

</div>