<?php
session_start();
include 'conexao.php';
include 'menu.php';
$id = $_GET['id'];
$sql = "SELECT * FROM historico WHERE  equipamentos_id_equipamentos = $id";
$result = $conn->query($sql);





?>


<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-sm-12">
                <td><a type='button' style='width:50%' href='index.php' class='btn btn-success mb-5'>INÍCIO</a></td>

            </div>

        </div>

        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id_historico =$row["id_historico"];
                $nome_representante =$row["nome_representante"];
                $supervisor =$row["supervisor"];
                $atuacao =$row["atuacao"];
                $data_configuracao =$row["data_configuracao"];
                $data_desligamento =$row["data_desligamento"];
                $observacao =$row["observacao"];
                $equipamentos_id_equipamentos =$row["equipamentos_id_equipamentos"];

                echo "<div class='row'>
                <div class='col-cm-12'>
                    <p>
                        <a class='btn btn-primary' data-bs-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample'>
                            ".$data_configuracao."
                        </a>
                       
                    </p>
                    <div class='collapse' id='collapseExample'>
                        <div class='card card-body'>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>
            </div>
    ";
        
            }
        }
        
        ?>

        
    </div>
</body>

</html>