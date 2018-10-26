<?php
    session_start();
    include "../../carregarPerguntas.php";
    include "../../carregarUsuarios.php";
    $perguntas = $_SESSION['perguntas'];
    $usuarios = $_SESSION['usuarios'];
//    foreach  ($perguntas as $pergunta) {
//        print_r($pergunta);
//    }
    $countPerguntas = count($perguntas);
    $countAlunos = 0;
    foreach  ($usuarios as $usuario) {
        if ($usuario->tipo === "aluno"){
    $countAlunos = $countAlunos + 1;
    }
    $perguntaCompleta = json_decode($_SESSION['perguntaCompleta']);
//    $perguntaCompleta = $_SESSION['perguntaCompleta'];
    }

?>
<!DOCTYPE html>
<!-- saved from url=(0064)https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../index_files/bootstrap.min.css" rel="stylesheet">
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../index_files/sticky-footer-navbar.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/product/product.css" rel="stylesheet">
    <link href="../sair.html" rel="script">
    <link href="https://raw.githubusercontent.com/robflaherty/screentime/master/screentime.js" rel="script">
</head>

<body onload="">
<?php
  echo "<script>if (localStorage.getItem('usuarioLogado')==null) {location.replace('../')};</script>";
    ?>
<header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="..">CodePro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="nav-link" href="..">Inicio<span class="sr-only">(current)</span></a>
</li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
    <div class="btn-group dropleft">
    <button type="button" class="btn btn-secondary">
<?php
    $usuarioLogado = json_decode($_SESSION['usuarioLogado']);
echo "$usuarioLogado->xp - $usuarioLogado->nome";
    ?>
</button>
<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
    <span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu " aria-labelledby="dropdownMenuReference">
    <a class="dropdown-item " href="../perfil">Ver Perfil</a>
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
        <!-- Large modal -->
        <center>
            <button type="button" class="btn" style="background-color: inherit;" data-toggle="modal" data-target=".bd-example-modal-lg">
                <img src="../../play-solid.svg" height="400">
            </button>
        </center>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card text-center">
                        <div class="card-header">
                            <?php echo $perguntaCompleta->enunciado;?>
                        </div>
                        <div class="card-body">
                            <form autocomplete="off" method="post" action="">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input name="opcao" value="1" type="radio" aria-label="Radio button for following text input">
                                        </div>
                                    </div>
                                    <input type="text" disabled class="form-control" value="<?php echo $perguntaCompleta->alternativa1;?>">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input name="opcao" value="2" type="radio" aria-label="Radio button for following text input">
                                        </div>
                                    </div>
                                    <input type="text" disabled class="form-control" value="<?php echo $perguntaCompleta->alternativa2;?>">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input name="opcao" value="3" type="radio" aria-label="Radio button for following text input">
                                        </div>
                                    </div>
                                    <input type="text" disabled class="form-control" value="<?php echo $perguntaCompleta->alternativa3;?>">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input name="opcao" value="4" type="radio" aria-label="Radio button for following text input">
                                        </div>
                                    </div>
                                    <input type="text" disabled class="form-control" value="<?php echo $perguntaCompleta->alternativa4;?>">
                                </div>
                                <button class="btn btn-primary" type="submit">Responder</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            <p class="lead">
                                Inicio: <?php $inicio = new DateTime();
                                $inicio->setTimeZone(new DateTimeZone('America/Buenos_Aires'));
                                $inicio->format('T');
                                $inicio = date_format($inicio, 'd-m-Y H:i:s');
                                echo ($inicio);?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>

            <script>
                var myVar = setInterval(myTimer, 1000);

                function myTimer() {
                    var d = new Date();
                    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                }
            </script>
        </center>
    </main>

    <footer class="footer">
    <div class="container">
    <span class="text-muted">CodePRO CEULP/ULBRA. <a id="demo"></a></span>
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