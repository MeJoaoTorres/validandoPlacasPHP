<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/valida.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Valida Placa</title>
    <style type="text/css">
        
        head, body {
            background-color: #F8F8FF;
        }
        .container {
            margin: 0 auto;
            text-align: center;
            margin-top: 17%;
            padding-bottom: 300px;
        }

        .titulo {
            padding-left: 50px;
        }
        .logoSenai {
            height: 41px;
            width: 160px;
        }
        #placa {
            width:500px;
            text-align: center;
            margin-top: -300px;
        }

        #placa:hover {
            color: red;
            font-size: 1.4em;
            border: 1px solid red;
            transition: 0.5s;
        }

        .backBotao {
            margin-left: 31.5px;
            width: 107px;
        }

        .backBotao:hover {
            font-size: 1.1em;
            color: yellow;
        }
        .continueBotao:hover {
            font-size: 1.2em;
            color: yellow;
        }

</style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="../img/logo.png" class="logoSenai" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- <a class="nav-link active" aria-current="page" href="index.php"> <p class='btn btn-secondary'>Voltar</p></a> -->
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
        session_start();
        error_reporting(0);
        // $placaAntiga = array ('');
        // $placaMercosul = array('');
        $placa = $_POST['placa'];
        $testPlaca = $placa;
        $_SESSION['placa'] = $testPlaca;
        
        $placaValida = 0;
        $placaInvalida = 0;

        // if (strlen($placa) == 7){


            for ($i = 0, $contNum = 0, $contLetra= 0; $i <= (strlen($placa)); $i++) {
                if(ctype_alpha($placa[$i])){
                    $contLetra += 1;

                }
                if (ctype_digit($placa[$i])){
                    $contNum += 1;
                }
            }


            if ($contLetra == 3 && $contNum == 4){
                echo("");
                $placaValida = 1;
            } else if ($contLetra == 4 && $contNum == 3) {
                echo (" ");
                $placaValida = 1;
            } else {
                $placaInvalida = 1;
            }

        // } else {
        //     $placaInvalida = 1;
        // }

    ?>
    <main class="container">
        <div>


            <form method="post" action="cadastro.php">
                
                <?php
                    if ($placaValida == 1) {
                        echo ("<h1> Placa válida! </h1>");
                       
                        echo"
                        <form method='post' action='cadastro.php'> 
                            <input readonly name='placa 'value='$placa' id='placa'>
                            <br><br>
                            <button class='btn btn-secondary continueBotao'><a src='cadastro.php>'></a>Continuar</button>
                        </form>
                        ";
                        echo '<br>';
                        // echo "<button class='btn btn-secondary continueBotao'><a src='cadastro.php>'></a>Continuar</button>";

                        // echo"<a class='nav-link active' aria-current='page' href='index.php'> <p class='btn btn-secondary'>Voltar</p></a>";
                        // echo "<br>";
                       

                    } else if ($placaInvalida == 1) {
                        echo("
                        <h1> Placa inválida! </h1>  <br>
                        <form name='validacao' action='index.php' method='post'> 
                        
                        
                        </form>
                            
                        
                        ");
                        // echo"<a class='nav-link active' aria-current='page' href='index.php'> <p class='btn btn-secondary'>Voltar</p></a>";
                    }
                 ?>
            </form>


        </div>
    </main>
    
</body>
</html>



