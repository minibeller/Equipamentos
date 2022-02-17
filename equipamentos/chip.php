<?php
session_start();
include 'conexao.php';
include 'menu.php';




$sql = "SELECT * FROM equipamentos AS e 
INNER JOIN historico AS h ON e.id_equipamentos = h.equipamentos_id_equipamentos";


$result = $conn->query($sql);



?>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-sm-4 mt-3 P-0">
                <form class="d-flex" action='pesquisa_linha.php' method="POST">
                    <input class="form-control " name="linha" type="search" placeholder="NÚMERO DA LINHA" aria-label="Search">
                    <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 text-center text-white" style="background-color: #3e4095;">
                <h1>LISTA DE CHIP'S</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 mt-1 p-0">


                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table table-striped text-center">
                            <thead class="sticky-top text-center" style="background-color: #3e4095; color: white">
                                <tr>

                                    <th scope="col">N° EQUIPAMENTO</th>
                                    <th scope="col">NÚMERO DA LINHA</th>
                                    <th scope="col">RCA</th>
                                    <th scope="col">SUPERISOR</th>
                                    <th scope="col">IMEI</th>
                                    <th scope="col">TIPO</th>
                                    <th scope="col">VER EQUIP.</th>




                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {

                                        echo "
                              <tr>
                                
                                  <td>" . $row["id_equipamentos"] . " </td>
                                  <td>" . $row["linha"] . " </td>                                  
                                  <td>" . $row["nome_representante"] . " </td>                                  
                                  <td>" . $row["supervisor"] . " </td>                                 
                                  <td>" . $row["imei"] . " </td>
                                  <td>" . $row["tipo"] . " </td>
                                  <td><a type='button' style='width:100%' href='visualizar_equipamento.php?id=" . $row["id_equipamentos"] . "' class='btn btn-primary'><i class='fas fa-eye'></i></a></td>    

                                 
                                
                                 
                              </tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }

                                ?>

                            </tbody>
                        </table>


                    </div>

                </div>

            </div>
        </div>
    </div>
</div>