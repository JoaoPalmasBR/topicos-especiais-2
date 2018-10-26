<?php
    session_start();
    include "../carregarPerguntas.php";
    include "../carregarUsuarios.php";
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
    <link href="./index_files/bootstrap.min.css" rel="stylesheet">
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://blackrockdigital.github.io/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="./index_files/sticky-footer-navbar.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/product/product.css" rel="stylesheet">
    <link href="sair.html" rel="script">
  </head>

  <body>
  <?php
  echo "<script>if (localStorage.getItem('usuarioLogado')==null) {location.replace('../')};</script>";
  ?>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="./">CodePro</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./">Inicio<span class="sr-only">(current)</span></a>
            </li>
<!--            <li class="nav-item">-->
<!--              <!--<a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Link</a>-->-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link disabled" href="./perguntas/">Perguntas</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link disabled"  href="./alunos/">Alunos</a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link disabled"  href="./ranking/">Ranking</a>-->
<!--            </li>-->
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
                <a class="dropdown-item " href="./perfil/">Ver Perfil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="sair.html">Sair</a>
              </div>
            </div>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden" style="border-radius: 21px ;">
                <div class="my-3 py-3">
                    <h2 class="display-5">Jogar</h2>
                    <p class="lead">Mostre seus conhecimentos e acumule pontos.</p>
                </div>
                <div class=" shadow-sm mx-auto" style="width: 80%;padding: 15px; height: 300px; border-radius: 21px ;">
                    <a href="go.php">
                        <img  style="height: 250px;" src="../play-solid.svg">
                    </a>
                </div>
            </div>
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">Ranking</h2>
                </div>
                <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
                    <table class="table table-light table-striped table-lg table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-success">
                            <th scope="row">1</th>
                            <td>Mark</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Jacob</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Larry</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
    <script src="./index_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./index_files/popper.min.js.download"></script>
    <script src="./index_files/bootstrap.min.js.download"></script>

    <!-- Page level plugin JavaScript-->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/chart.js/Chart.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Demo scripts for this page-->
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/js/demo/datatables-demo.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-sb-admin/js/demo/chart-area-demo.js"></script>
  

</body></html>