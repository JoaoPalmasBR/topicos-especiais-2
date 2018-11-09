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
$usuarioLogado = json_decode($_SESSION['usuarioLogado']);

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

    <title>codePRO</title>

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
    <style>
        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 50px;
            font-size: 16px;
            line-height: 50px;
            border-radius: 25px;
            background-color: #f1f1f1;
        }

        .chip img {
            float: left;
            margin: 0 10px 0 -25px;
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }
        .closebtn {
            padding-left: 10px;
            color: #888;
            font-weight: bold;
            float: right;
            font-size: 20px;
            cursor: pointer;
        }

        .closebtn:hover {
            color: #000;
        }
    </style>
    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url('images/noise.jpg'); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 0px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }

        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
    </style>
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
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="../perguntas/">Perguntas</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="../alunos/">Alunos</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="../ranking/">Ranking</a>-->
<!--                </li>-->
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
                        <a class="dropdown-item " href="./">Ver Perfil</a>
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
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <!-- -->
            <div id="page-wrap">

                <img src="./images/cthulu.png" alt="Photo of Cthulu" id="pic" />

                <div id="contact-info" class="vcard">

                    <!-- Microformats! -->

                    <h1 class="fn">
                        <?php echo $usuarioLogado->nomecompleto;?>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Alterar Senha</button>
                    </h1>

                    <p>
                        Usuario: <span class="user"><kbd><?php echo $usuarioLogado->nome;?></kbd></span><br />
                        Email: <a class="email" href="mailto:<?php echo $usuarioLogado->email;?>"><?php echo $usuarioLogado->email;?></a>
                    </p>
                </div>

                <div id="objective">
                    <blockquote class="blockquote text-right">
                        <p class="mb-0">
                            Eu sou um jovem profissional extrovertido e enérgico (pergunte a qualquer um),
                            buscando uma carreira que se adapte às minhas habilidades profissionais, personalidade e tendências assassinas.
                            Minha cabeça de lula é uma solucionadora de problemas magistral e inspira medo em quem olha para ela. Eu posso trazer o domínio do mundo para a sua organização.
                        </p>
                        <footer class="blockquote-footer">Alguem famoso conhecido como
                            <cite title="Source Title">
                                <?php
                                    $nomes = explode(" ", $usuarioLogado->nomecompleto);
                                    echo $nomes[0]." ".$nomes[1];
                                ?>
                            </cite>
                        </footer>
                    </blockquote>
                    <p>


                    </p>
                </div>

                <div class="clear"></div>

                <dl>
                    <dd class="clear"></dd>

                    <dt>Jogador</dt>
                    <dd>
                        <h2>
                            Nível: <?php echo $usuarioLogado->nivel;?>
                        </h2>
                        <p>
                            <strong>XP:  <?php echo $usuarioLogado->xp;?></strong><br>
                            <strong>Vulgo:</strong> <?php
                            if ($usuarioLogado->nivel==1){
                                echo "<button type='button' class='btn btn-primary'>
                        Dente de Leite <span class='badge badge-light'>";
                                echo $usuarioLogado->xp;
                                echo "</span>
                        <span class='sr-only'>unread messages</span>
                      </button>";
                            }
                            if ($usuarioLogado->nivel==2){
                                echo "<button type='button' class='btn btn-primary'>
                        Badeco <span class='badge badge-light'>";
                                echo $usuarioLogado->xp;
                                echo "</span>
                        <span class='sr-only'>unread messages</span>
                      </button>";
                            }
                            if ($usuarioLogado->nivel==3){
                                echo "<button type='button' class='btn btn-primary'>
                        Funcionario do Google <span class='badge badge-light'>";
                                echo $usuarioLogado->xp;
                                echo "</span>
                        <span class='sr-only'>unread messages</span>
                      </button>";
                            }

                            ?><br />
                    </dd>

                    <dd class="clear"></dd>

                    <dt>Conquistas</dt>
                    <dd>
<!--                        <div class="chip"><img src="img_avatar.png" alt="Person" width="96" height="96">John Doe</div>-->
<!--                        <h2>Office skills</h2>-->
<!--                        <p>Office and records management, database administration, event organization, customer support, travel coordination</p>-->
<!---->
<!--                        <h2>Computer skills</h2>-->
<!--                        <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows</p>-->
                    </dd>


                </dl>

            </div>
            <!-- -->

            <!-- Small modal -->

            <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Alterar Senha</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="alterarsenha.php" method="post" autocomplete="off" target="_self">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Senha" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                        </div>
                    </div>
                </div>
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
