<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id = $_GET['id'];
$sql = "SELECT * FROM historico WHERE  equipamentos_id_equipamentos = $id ORDER BY data_configuracao DESC ";
$result = $conn->query($sql);




/*
 $id_equipamentos = $row["id_historico"];
                                $imei = $row["nome_representante"];
                                $imei = $row["atucao"];
                                $marca = $row["supervisor"];
                                $modelo = $row["data_configuracao"];
                                $cor = $row["data_desligamento"];
                                $conta_google = $row["observacao"];
                                $senha_google = $row["equipamento_id_equipamento"];
*/



?>


<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-12 mb-5"  >
            <h4 class='text-center mb-2' style="background-color: #3e4095;color: white;">HISTÓRICO DO EQUIPAMENTO</h4>

                <?php

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        
                      
                        $data_configuracao = date('d/m/Y', strtotime($row["data_configuracao"]));;
                      
                        echo "
                              <div class='card mt-2' style='background-color: #3e4095;color: white;'>
                                    <div class='card-header' >
                                     ID HISTÓRICO: " . $row["id_historico"] . "
                                    </div>
                                    <div class='card-body bg-light' style='color: black'>
                                       
                                        <p><b>NOME REPRESENTANTE:</b> " . $row["nome_representante"] . "</p>
                                        
                                        <p><b>ATUAÇÃO: </b>" . $row["atuacao"] . "</p>";
                                        echo "<p><b> SUPERVISOR:</b> " . $row["supervisor"] . "</p>";
                                      
                                       
                                        
                                        
                                      echo"  <p><b>DATA CONFIGURAÇÃO:</b> " . $data_configuracao . "</p>
                                        
                                       

                                        <p><b>OBSERVAÇÃO: </b>" . $row["observacao"] . "</p>

                                        <footer class='blockquote-footer'> <p><b>DATA DESLIGAMENTO:</b> " .  $row["data_desligamento"] . "</p></footer>
                                       
                                    </div>
                                </div>
                          
                                
                                  ";
                    }
                } else {
                    echo "0 results";
                }


                ?>

            </div>


        </div>
</body>

</html>