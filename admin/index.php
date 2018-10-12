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
    <link href="sair.html" rel="script">
  </head>

  <body>

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
            <li class="nav-item">
              <!--<a class="nav-link" href="https://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/#">Link</a>-->
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="">Perguntas</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <div class="btn-group dropleft">
              <button type="button" class="btn btn-secondary"><script>document.write(localStorage.getItem('usuarioNome'));</script></button>
              <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu " aria-labelledby="dropdownMenuReference">
                <a class="dropdown-item " href="#">Ver Perfil</a>
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
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-question-circle"></i>
                        </div>
                        <div class="mr-5"><?php echo $countPerguntas; ?> Perguntas!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Visualizar</span>
                        <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-user-graduate"></i>
                        </div>
                        <div class="mr-5"><?php echo $countAlunos; ?> Alunos!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Visualizar</span>
                        <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-list-ol"></i>
                        </div>
                        <div class="mr-5">Ranking!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">Visualizar</span>
                        <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                    </a>
                </div>
            </div>
        </div>



      <h1 class="mt-5">Sticky footer with fixed navbar</h1>
      <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
      <p>Back to <a href="https://getbootstrap.com/docs/4.1/examples/sticky-footer">the default sticky footer</a> minus the navbar.</p>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./index_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./index_files/popper.min.js.download"></script>
    <script src="./index_files/bootstrap.min.js.download"></script>
  

</body></html>