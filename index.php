<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de Placas</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css">
        head, body {
            background-color: #F8F8FF;
        }
        .container {
            margin: 0 auto;
            text-align: center;
            margin-top: 17%;
        }

        .titulo {
            padding-left: 50px;
        }
        .logoSenai {
            height: 41px;
            width: 160px;
        }

        /* form {
            background-color: white;
            width: 100%;
            padding-top: 100px;
            padding-bottom: 200px;
        } */
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
                            <a class="nav-link active" aria-current="page" href="#"> <h1 class="titulo" style='padding-left: 250px;'>Estacionamento SENAI 24h</h1></a>
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

    <main class="container">
        <div class="bloco-1">
            <form action="validaplaca.php" method="post">
                <label ><input id="placa" name="placa" type="text" minlenght='7' maxlength="7"  placeholder="Informe a placa sem pontos" required> <br> <small>* A placa deve conter 3 letras e 4 numeros, ou 4 letras e tres numeros</small></label> <br>
                <!-- <button type="submit" class="btn btn-secondary"><a src="validaplaca.php"></a>Verificar</button> -->
                <button type="submit" class="btn btn-secondary"><a src="validaplaca.php"></a>Verificar</button>
            </form>
            <form action="" method="post">
                <!-- <label ><input id="placa" name="placa" type="text" min='7' max="7" placeholder="Confirme a placa"> <br> </label> <br> -->
            </form>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>