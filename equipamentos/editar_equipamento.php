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
        $tipo = $row["tipo"];
        $numero_equipamento = $row["numero_equipamento"];
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
    <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form action="edt_equipamento.php" method='POST'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='text-center mb-2' style="background-color: #3e4095;color: white;">EDITAR EQUIPAMENTO</h4>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">IMEI</span>
                            <input type="text" class="form-control" name="imei" value="<?php echo $imei ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">NÚMERO EQUIPAMENTO</span>
                            <input type="text" class="form-control" name="numero_equipamento" value="<?php echo $numero_equipamento ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class='row'>
                <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">MARCA</span>
                            <select class="form-select form-select-sm" name="marca" aria-label=".form-select-sm example">
                                <option  value="<?php echo $marca ?>" selected><?php echo $marca ?></option>
                                <option value="LG ">LG</option>
                                <option value="MOTOROLA ">MOTOROLA</option>
                                <option value="SAMSUNG ">SAMSUNG</option>
                               
                            </select>
                        </div>
                    </div>
     
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">MODELO</span>
                            <select class="form-select form-select-sm" name="modelo" aria-label=".form-select-sm example">
                                <option selected  value="<?php echo $modelo ?>"><?php echo $modelo ?></option>
                                <option value="LG LMX430 - K40S">LG LMX430 - K40S</option>
                                <option value="MOTOROLA XT1952-2 - MOTO G7 PLAY">MOTOROLA XT1952-2 - MOTO G7 PLAY</option>
                                <option value="SAMSUNG GALAX GT-P6200L">SAMSUNG GALAX GT-P6200L</option>
                                <option value="SAMSUNG GALAX GT-P3100">SAMSUNG GALAX GT-P3100</option>
                                <option value="SAMSUNG GALAXY SM-T116">SAMSUNG GALAXY SM-T116</option>
                                
                                <option value="SAMSUNG GALAXY SM-A015">SAMSUNG GALAXY SM-A015</option>
                                <option value="SAMSUNG GALAXY SM-T211">SAMSUNG GALAXY SM-T211</option>
                                <option value="SAMSUNG GALAXY SM-T285M">SAMSUNG GALAXY SM-T285M</option>

                            </select>
                        </div>
                    </div>
     
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">COR</span>
                            <input type="text" class="form-control" name="cor" value="<?php echo $cor ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">CONTA GOOGLE</span>
                            <input type="text" class="form-control" name="conta_google" value="<?php echo $conta_google ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">SENHA GOOGLE</span>
                            <input type="text" class="form-control" name="senha_google" value="<?php echo $senha_google ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">LINHA</span>
                            <input type="text" class="form-control" name="linha" value="<?php echo $linha ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">STATUS</span>
                            <select class="form-select form-select-sm" name="status" aria-label=".form-select-sm example">
                                <option selected><?php echo $status ?></option>
                                <option value="ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">TIPO</span>
                            <select class="form-select form-select-sm" name="tipo" aria-label=".form-select-sm example">
                                <option selected><?php echo $tipo ?></option>
                                <option value="SMARTPHONE">SMARTPHONE</option>
                                <option value="TABLET">TABLET</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="form-floating">
                            <textarea class="form-control" name="observacao" id="floatingTextarea2" style="height: 100px"><?php echo $observacao ?></textarea>
                            <label for="floatingTextarea2">OBSERVAÇÃO</label>
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class="input-group input-group-sm mb-3">
                            <input type="hidden" class="form-control" name="id_equipamentos" value="<?php echo $id ?>">
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6 mt-2'>

                        <a type='button' style='width:100%' href="index.php" class='btn btn-secondary'>CANCELAR</a></td>
                    </div>
                    <div class='col-sm-6 mt-2'>
                        <button type="submit" style="width: 100%;" class="btn btn-success">CADASTRAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-2">

    </div>

</div>