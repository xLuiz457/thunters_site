<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="styleManual.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pictures/logo.png" type="image/x-icon">
    <title>Manual | Treasure Hunters</title>
</head>
<body style="background-color:#a9eaf0">
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top px-md-5">
        <a class="navbar-brand" href="index.php" style="color:#6f42c1; font-size:35px;">Treasure Hunters</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto" style="font-size:20px">
                <li class="nav-item">
                    <a class="nav-link" href="sobreJogo.php">Jogo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="manual.php">Manual</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="sobreEquipe.php">Equipe</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <main id="controles" style="margin-top:150px">
        <div class="container text-center">
            <img src="pictures/logo.png" alt="logo">
        </div>

        <div class="container text-center" style="margin-top:40px">
            <div class="row">
                <div class="col-lg-4">
                    <img src="pictures/screenshots/1.jpg" alt="print1" style="width:100%">
                </div>

                <div class="col-lg-4">
                    <img src="pictures/screenshots/2.jpg" alt="print2" style="width:100%">
                </div>

                <div class="col-lg-4">
                    <img src="pictures/screenshots/3.jpg" alt="print3" style="width:100%">
                </div>
            </div>
        </div>

        <div class="container text-center">
            <h2 style="color:rgb(45, 0, 93)">Controles</h2><br>
            <h3>
                <img src="pictures/w-a-d keys.png" alt="movement" style="width:8%">
                Movimentar o barco
            </h3>
            <h3>
                <img src="pictures/spacebar.png" alt="shoot" style="width:8%">
                Atirar bala de canhão
            </h3>
        </div>
    </main>

    <section id="tecnicas">
        <div class="container">
            <h2 style="color:rgb(45, 0, 93)">Requisitos mínimos</h2><br>
            <p style="font-size:20px;"><b>Processador</b>: Intel Core i7-4790 @ 3.60GHz</p>
            <p style="font-size:20px;"><b>Memória RAM</b>: 8GB</p>
            <p style="font-size:20px;"><b>Placa de vídeo</b>: NVIDIA GeForce GT 720</p>
            <p style="font-size:20px;"><b>Sistema operacional</b>: Windows 10 de 64 bits</p>
            <p style="font-size:20px;"><b>Espaço em disco</b>: 150 MB</p><br>
        </div>
        
        <div class="container">
            <h2 style="color:rgb(45, 0, 93)">Ferramentas de Desenvolvimento</h2><br>

            <h3>
                <b>Engine</b>
                <img src="pictures/ferramentas/unity.png" alt="unity" style="width:10%">
            </h3><br><br>

            <h3>
                <b>Linguagem de Programação</b>
                <img src="pictures/ferramentas/c-sharp.jpg" alt="c-sharp" style="width:8%">
            </h3><br><br>

            <h3>
                <b>Editor de código-fonte</b>
                <img src="pictures/ferramentas/visual-code.png" alt="visual-code" style="width:5%">
            </h3>
        </div>
    </section>
</body>
</html>