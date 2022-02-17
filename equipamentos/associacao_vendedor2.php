<?php
session_start();
include 'conexao.php';
include 'menu.php';
$supervisor = $_POST['supervisor'];

$sql = "SELECT * FROM historico WHERE supervisores_id_supervisores = '$supervisor'";
$result = $conn->query($sql);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-5">
            <h1 class="text-center text-white" style="background-color: #3e4095;">
                CONFIRMAR MUDANÇA DE SUPERVISOR?
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">


            <div class="row">
                <div class="col-sm-12 mb-1">
                    <form action="muda_supervisor.php" method="POST"> 
                        <div class="row mt-2">
                            <div class="col-sm-6">
                            <input type="hidden" name="id_supervisores" VALUE="<?php echo $supervisor; ?>">
                            <input class="form-control " name="nome_supervisor" placeholder="NOME DO NOVO SUPERVISOR" >
                                <button style='width:100%' type="submit"  class='mt-2 btn btn-success'>MUDAR SUPERVISOR</button>
                            </div>
                            <div class="col-sm-6">
                                <input class="form-control" name="regiao" placeholder="REGIÂO DE ATUAÇÃO">
                                <a type='button' style='width:100%' href='index.php' class="mt-2 btn btn-danger">CANCELAR</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-sm-12 mt-1">

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