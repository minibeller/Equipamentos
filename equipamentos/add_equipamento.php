<?php
session_start();
include 'conexao.php';
include 'menu.php';

$sql = "SELECT * FROM equipamentos.linhas where status = 'INATIVO'";
$result = $conn->query($sql);

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="salva_equipamento.php" method='POST'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <h4 class='text-center mb-2' style="background-color: #3e4095;color:white">NOVO EQUIPAMENTO</h4>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">IMEI</span>
                            <input type="text" class="form-control" name="imei" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">NÚMERO EQUIPAMENTO</span>
                            <input type="text" class="form-control" name="numero_equipamento" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class='row'>

                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">MARCA</span>
                            <select class="form-select form-select-sm" name="marca" aria-label=".form-select-sm example">
                                <option selected></option>
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
                                <option selected></option>
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
                            <input type="text" class="form-control" name="cor" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>



                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">CONTA GOOGLE</span>
                            <input type="text" class="form-control" name="conta_google" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">SENHA GOOGLE</span>
                            <input type="text" class="form-control" name="senha_google" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                </div>
                <div class='row'>
                <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">LINHA</span>
                            <input type="text" class="form-control" name="linha" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">STATUS</span>
                            <select class="form-select form-select-sm" name="status" aria-label=".form-select-sm example">
                                <option selected></option>
                                <option value="ATIVO">ATIVO</option>
                                <option value="INATIVO">INATIVO</option>
                            </select>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">TIPO</span>
                            <select class="form-select form-select-sm" name="tipo" aria-label=".form-select-sm example">
                                <option selected></option>
                                <option value="SMARTPHONE">SMARTPHONE</option>
                                <option value="TABLET">TABLET</option>
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
                    <div class='col-sm-6 mt-5'>

                        <a type='button' style='width:100%' href="index.php" class='btn btn-secondary'>CANCELAR</a></td>
                    </div>
                    <div class='col-sm-6 mt-5'>
                        <button type="submit" style="width: 100%;" class="btn btn-success">CADASTRAR</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>