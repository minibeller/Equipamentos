<?php
session_start();
include 'menu.php';
include 'conexao.php';




if(!empty($_POST['rca'])){
    $rca = $_POST['rca'];
    $sql = "SELECT * FROM historico WHERE nome_representante LIKE '%$rca%'";
    $result = $conn->query($sql);
}
else{
    $supervisor = $_POST['supervisor'];
    $sql = "SELECT * FROM historico WHERE supervisor LIKE '%$supervisor%'";
    $result = $conn->query($sql);
}




?>


<body>
 
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
        <a href='vendedor.php' type="button" style="width: 100%;" class="btn btn-success mb-2">NOVA PESQUISA</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
          
        <table class="table table-striped text-center">
                <thead class="sticky-top text-center" style="background-color: #3e4095; color: white">
                    <tr>
                        <th scope="col">NOME REPRESENTANTE</th>
                        <th scope="col">ATUAÇÃO</th>
                        <th scope="col">SUPERVISOR</th>
                        <th scope="col">DATA CONFIGURAÇÃO</th>
                  
                        <th scope="col">VER</th>     
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                            echo "
                              <tr>
                                
                              <td>" . $row["nome_representante"] . " </td>
                                  <td>" . $row["atuacao"] . " </td>
                                  
                                  <td>" . $row["supervisor"] . " </td>
                                  <td>" . $row["data_configuracao"] . " </td>
                                 
                                  <td><a type='button' style='width:100%' href='visualizar_vendedor.php?id=" . $row["id_historico"] . "' class='btn btn-primary'><i class='fas fa-eye'></i></a></td>    
                                  
                                
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