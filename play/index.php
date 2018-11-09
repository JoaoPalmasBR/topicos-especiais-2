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
<html lang="pt">
    <head>
        <?php include "head.php"; ?>
        <style>
            body {
                color: white;
            }
            .split {
                height: 100%;
                width: 50%;
                position: fixed;
                z-index: 1;
                top: 0;
                overflow-x: hidden;
                padding-top: 20px;
            }

            .left {
                left: 0;
                background-color: gray;
            }

            .right {
                right: 0;
                background-color: darkgray;
            }

            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .centered img {
                width: 150px;
                /*border-radius: 50%;*/
            }
            .centered div {
                width: 150px;
                /*border-radius: 50%;*/
            }
        </style>
    </head>
    <body>
        <?php include "header.php"; ?>

        <script>
            var subiu = localStorage.getItem('subiu');
            if(subiu==2){
                location.assign('./quiz/subiu/');
            }
            if(subiu==3){
                location.assign('./quiz/subiu/');
            }
            var nivel = <?php echo json_decode($_SESSION['usuarioLogado'])->nivel;?>;

            if (nivel==1){
                alert("Bem Vindo Dente deeeeeeee Leite");
            }
            if (nivel==2){
                alert("Faaaaaala Badeco.");
            }
            if (nivel==3){
                alert("Que Honra Funcionario do Goooooogle");
            }
        </script>
        <!-- Begin page content -->
        <main role="main" class="container">
            <div class="split left">
                <div class="centered">
                    <a href="go/">
                        <img src="../play-solid.svg" alt="Jogar">
                    </a>
                    <h2>Jogar</h2>
                    <p>Mostre seus conhecimentos e acumule pontos.</p>
                </div>
            </div>

            <div class="split right">
                <div class="centered">
                        <div class="my-3 p-3">
                            <h2 class="display-5">Ranking</h2>
                        </div>
                            <table class="table table-dark table-striped table-lg table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Pontos</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include "../connect.php";
                                $count = 1;
                                $queryUsuarios = "SELECT * FROM `codepro_usuarios` where tipo='aluno' order by `xp` desc, `nome` asc LIMIT 5;";
                                if ($resultUsuarios = $mysqli->query($queryUsuarios)) {
                                    while ($rowUsuarios = $resultUsuarios->fetch_assoc()) {
                                        $idUsuario = $rowUsuarios['id'];
                                        $nomeUsuario = $rowUsuarios['nome'];
                                        $xpUsuario = $rowUsuarios['xp'];
                                        if ($count==1){
                                            echo "<tr class=\"table-light text-dark\">";
                                        }
                                        else{
                                            echo "<tr>";
                                        }
                                        echo "<td>$count</td>";
                                        echo "<th scope=\"row\">$nomeUsuario</th>";
                                        echo "<td>$xpUsuario</td>";
                                        echo "</tr>";
                                        $count+=1;}}
                                ?>
                                </tbody>
                            </table>
                </div>
            </div>


        </div>
    </main>
    <?php include "footer.php"; ?>
    </body>
</html>