
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Controle Tablet e Smartphone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link href="css/css.css" rel="stylesheet">




</head>


<body class="text-center" style="background-color: #3e4095;">
    <div class="container">
        <div class="row">
            <div class="col-sm-3" >

            </div>
            <div class="col-sm-6">
                <main class="form-signin mt-1 p-5" >
                    <form action="verifica_login.php" method="POST" class="p-2" style="background-color: #eaeaea;border-radius: 10px">
                        <img class="bloco" src="img/logo.png" alt="" width="180" height="150">
                        <h1 class="h3 mb-2 mt-2 fw-normal">CONTROLE DE EQUIPAMENTOS</h1>

                        <div class="form-floating mt-2">
                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">E-MAIL:</label>
                        </div>
                        <div class="form-floating mt-2">
                            <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">SENHA:</label>
                        </div>

                    
                        <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">LOGIN</button>
                        <p class="mt-5 mb-2 text-muted">2021&copy; TECNOLOGIA DA INFORMAÇÃO E COMUNICAÇÃO</p>
                    </form>
                </main>
            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>




</body>

</html>