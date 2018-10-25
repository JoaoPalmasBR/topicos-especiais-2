<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 23/10/2018
 * Time: 15:26
 */
session_start();
include "../../carregarPerguntas.php";
include "../../carregarUsuarios.php";
$perguntas = $_SESSION['perguntas'];
$usuarios = $_SESSION['usuarios'];
foreach  ($usuarios as $usuario) {
    if ($usuario->tipo === "aluno"){
//        $countAlunos = $countAlunos + 1;
    }
}
?>
<!DOCTYPE html>
<!-- saved from url=(0064)https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/ -->
<html lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../index_files/bootstrap.min.css" rel="stylesheet">
<!--    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet" type="text/css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/brands.css" integrity="sha384-Px1uYmw7+bCkOsNAiAV5nxGKJ0Ixn5nChyW8lCK1Li1ic9nbO5pC/iXaq27X5ENt" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/fontawesome.css" integrity="sha384-BzCy2fixOYd0HObpx3GMefNqdbA7Qjcc91RgYeDjrHTIEXqiF00jKvgQG0+zY/7I" crossorigin="anonymous">
<!--    <script defer src="https://use.fontawesome.com/releases/v5.4.1/js/brands.js" integrity="sha384-lc/yFuYW3B0EW9B2QSpod2KeBxq6/ZizGwAW6mRLUe3kKUVlSBfDIVZKwKIz/DBg" crossorigin="anonymous"></script>-->
<!--    <script defer src="https://use.fontawesome.com/releases/v5.4.1/js/fontawesome.js" integrity="sha384-ISRc+776vRkDOTSbmnyoZFmwHy7hw2UR3KJpb4YtcfOyqUqhLGou8j5YmYnvQQJ4" crossorigin="anonymous"></script>-->
    <!-- Custom styles for this template -->
    <link href="../index_files/sticky-footer-navbar.css" rel="stylesheet">
    <link href="../sair.html" rel="script">

</head>

<body>
<?php
    echo "<script>if (localStorage.getItem('usuarioLogado')==null) {location.replace('../../')};</script>";
?>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../">CodePro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../">Inicio</a>
                </li>
                <li class="nav-item ">
                    <!--<a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Link</a>-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../perguntas/">Perguntas</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./">Alunos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ranking/">Ranking</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-secondary"><script>document.write(localStorage.getItem('usuarioNome'));</script></button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuReference">
                        <a class="dropdown-item " href="../perfil/">Ver Perfil</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../sair.html">Sair</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    <div class="card-columns">
            <?php
                foreach  ($usuarios as $usuario) {
                    if ($usuario->tipo === "aluno"){
                        echo "<div class=\"card\">";
                            echo "<div class=\"card-body\">";
                                echo "<h5 class=\"card-title\">";
                                    echo "<img src='../../user-circle-regular.svg' height='45' alt=\"fotoperfil\">";
                                    echo " $usuario->nomecompleto ($usuario->nome)";
                                echo "</h5>";
                                echo "<p class=\"card-text\">";
                                    echo "<h1><img src='../../angle-double-up-solid.svg' height='45'> $usuario->nivel 
                                    <img src='../../star-regular.svg' height='45'> $usuario->xp </h1>";
                                echo "</p>";
                            echo "</div>";
                            echo "<div class=\"card-footer\">";
                                echo "<small class=\"text-muted\">$usuario->email</small>";
                            echo "</div>";
                        echo "</div>";
                    }
                }
            ?>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <span class="text-muted">CodePRO CEULP/ULBRA.</span>
    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../index_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../index_files/popper.min.js.download"></script>
<script src="../index_files/bootstrap.min.js.download"></script>

<!-- Page level plugin JavaScript-->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/chart.js/Chart.min.js"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/datatables/jquery.dataTables.js"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Demo scripts for this page-->
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/js/demo/datatables-demo.js"></script>
<script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/js/demo/chart-area-demo.js"></script>


</body></html>
