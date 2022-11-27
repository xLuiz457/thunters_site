<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="pictures/logo.png" type="image/x-icon">
    <title>Treasure Hunters</title>
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
                    <a class="nav-link" href="manual.php">Manual</a>
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

    <main class="container-fluid text-center" style="margin-top:150px">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-sm-7" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="pictures/screenshots/1.jpg" alt="First slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="pictures/screenshots/2.jpg" alt="Second slide">
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="pictures/screenshots/3.jpg" alt="Third slide">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>

            <div class="col-sm-5 align-self-center">
                <img src="pictures/logo.png" alt="logo" style="width:100%">

                <p style="font-size:20px">
                    Venha jogar esse jogo divertidíssimo estilo Space Invaders!<br>
                    (em desenvolvimento)
                </p>
            </div>
        </div>
    </main>

    <section style="margin-top:100px; background-color:#51a8ef">
        <div class="container">
            <video autoplay="" muted="" loop="">
                <source src="videos/thunters_gameplay.mp4" type="video/mp4">
            </video>
        </div>
    </section>

    <article class="bg-dark">
        <div class="container mt-5 text-center">
            <h2 style="color:#6f42c1">Redes Sociais</h2>
            <div class="row">
                <div class="col-sm-4">
                    <a class="nav-link" href="https://www.youtube.com/channel/UCfRO_iqxUb71oMUipxf-yNQ" target="_blank">
                        <img src="pictures/icons/youtube.png" alt="youtube" style="width:25%; margin-left:300px;">
                    </a>
                </div>

                <div class="col-sm-4">
                    <a class="nav-link" href="https://www.instagram.com/thewarriorsfatec/" target="_blank">
                        <img src="pictures/icons/instagram.png" alt="instagram" style="width:20%">
                    </a>
                </div>

                <div class="col-sm-4">
                    <a class="nav-link" href="https://twitter.com/WarriorsFatec" target="_blank">
                        <img src="pictures/icons/twitter.png" alt="twitter" style="width:20%; margin-right:300px;">
                    </a>
                </div>
            </div>
        </div>
    </article>
</body>
</html>