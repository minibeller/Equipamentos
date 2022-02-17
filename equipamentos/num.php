<?php
session_start();
include 'menu.php';
include 'conexao.php';

$num = $_POST['num'];



$sql = "SELECT * FROM equipamentos WHERE numero_equipamento = '$num'";


$result = $conn->query($sql);

?>


<body>
 
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row mb-2 mt-3">
                <div class="col-sm-4">

                    <form class="d-flex" action='num.php' method="POST">
                        <input class="form-control me-2" name="num" type="search" placeholder="NÚMERO EQUIPAMENTO" aria-label="Search">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form class="d-flex" action='emei.php' method="POST">
                        <input class="form-control me-2" name="imei" placeholder="IMEI" aria-label="Search">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form class="d-flex" action='tipo.php' method="POST">
                        <input class="form-control me-2" name="tipo" type="search" placeholder="TIPO" aria-label="Search">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <table class="table table-striped text-center">
                <thead class="sticky-top text-center" style="background-color: #3e4095; color: white">
                    <tr>

                        <th scope="col">N° EQUIPAMENTO</th>
                        <th scope="col">IMEI</th>
                        <th scope="col">TIPO</th>
                        <th scope="col">MARCA</th>
                        <th scope="col">MODELO</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">VER</th>
                        <th scope="col">EDITAR </th>
                        <th scope="col">APAGAR</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                            echo "
                              <tr>
                                
                              <td>" . $row["numero_equipamento"] . " </td>
                                  <td>" . $row["imei"] . " </td>
                                  
                                  <td>" . $row["tipo"] . " </td>
                                  <td>" . $row["marca"] . " </td>
                                  <td>" . $row["modelo"] . " </td>
                                  <td>" . $row["status"] . " </td>
                                  <td><a type='button' style='width:100%' href='visualizar_equipamento.php?id=" . $row["id_equipamentos"] . "' class='btn btn-primary'><i class='fas fa-eye'></i></a></td>    
                                  <td><a type='button' style='width:100%' href='editar_equipamento.php?id=" . $row["id_equipamentos"] . "' class='btn btn-warning'><i class='fas fa-pen'></i></a></td>    
                                 
                                  <td><a type='button' style='width:100%' href='apagar_equipamento.php?id=" . $row["id_equipamentos"] . "'' class='btn btn-danger'><i class='fas fa-trash-alt'></i></a></td>    
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
</body>

</html>