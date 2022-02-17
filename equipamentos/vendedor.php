<?php
session_start();
include 'conexao.php';
include 'menu.php';
$sql = "SELECT * FROM historico ORDER BY nome_representante";
$result = $conn->query($sql);

$sql2 =  "SELECT * FROM supervisores";
$result2 = $conn->query($sql2);

?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row mb-2 mt-3">
                <div class="col-sm-4">
                    <form class="d-flex" action='pesquisa_vendedor.php' method="POST">
                        <input class="form-control me-2" name="rca" type="search" placeholder="NOME OU NÚMERO DO RCA" aria-label="Search">
                        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form class="d-flex" action='pesquisa_vendedor.php' method="POST">
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
                        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <a class="btn btn-success" href="associacao_vendedor.php" style="width: 100%;" type="submit">ASSOCIAÇÃO DE SUPERVISORES</i></a>
                </div>
            </div>
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