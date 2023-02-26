<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro</title>
    <style type="text/css">

        head, body{
            background-color: #F8F8FF;
        }
        .container {
            margin: 0 auto;
            text-align: center;
            position: relative;
            min-height: 100vh
        }

        .titulo {
            padding-left: 300px;
        }
        .logoSenai {
            height: 41px;
            width: 160px;
        }

        .backBotao {
            margin-left: 31.5px;
            width: 107px;
        }

       
        #placa {
            width:500px;
            text-align: center;
        }

        #placa:hover {
            color: red;
            font-size: 1.4em;
            border: 1px solid red;
            transition: 0.5s;
        }
        .backBotao {
            margin-left: 115px;
        }

        .content-wrap {
            padding-bottom: 5rem; 
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 5rem; 
        }
   
</style>

</head>
<body>
<header class="fixed-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="../img/logo.png" class="logoSenai" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"> <h1 class="titulo">Estacionamento 24h</h1></a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <a class="nav-link active" aria-current="page" href="index.php"> <p class='btn btn-secondary backBotao'>Voltar</p></a>
    <?php 
        // $placa = $_POST['placa'];
        session_start();
        $placa = $_SESSION['placa'];
        // echo "
        // <label for='exampleInputEmail1'>CPF</label>
        // <input readonly value='$placa' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder=''>
        // <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>

        // ";
        

    ?> 
    <main>
        <div>
        <form action="relatorio.php" method='post'>
            <div class="form-group">
                <label for="exampleInputEmail1">Placa do carro:</label>
                <input readonly value="<?PHP echo $placa ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Marca</label>
                <input type="text" class="form-control" name='marca' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: Ford">
                
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Modelo:</label>
                <input type="text" name='modelo'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" ex: Ford KA">
                
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Cor:</label>
                <input type="text" name='cor' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: Cinza">
                
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Ano de fabricação:</label>
                <input type="date" class="form-control" name='data' id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex: 2018">
                
            </div>
            <br>
            
            <button type="submit" class="btn btn-primary backBotao">Continuar</button>
            <a class="nav-link active" aria-current="page" href="index.php"> <p class='btn btn-secondary backBotao'>Voltar</p></a>
            <br>
        </form>

            
            </form>
        </div>
</main>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->






    
</body>
</html>