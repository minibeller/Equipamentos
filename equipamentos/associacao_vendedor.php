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
        <div class="col-sm-12 mt-5">
            <h1 class="text-center text-white" style="background-color: #3e4095;">
                ASSOCIAÇÕES DE VENDEDORES
            </h1>
        </div>
    </div>

    <div class="row">
        <form class="d-flex" action='associacao_vendedor2.php' method="POST">

            <div class="col-sm-8">
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
            <div class="col-sm-4">
                <button style="width: 100%;" class="btn btn-success" type="submit">MUDAR SUPERVISOR</button>
            </div>
        </form>

    </div>

</div>


</body>

</html>