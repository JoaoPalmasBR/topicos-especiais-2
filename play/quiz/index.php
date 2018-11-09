<?php
    session_start();
    include "../../connect.php";
    include "../../pergunta.php";
    $perguntaCompleta = null;
    $queryPerguntas= "SELECT * FROM `codepro_perguntas` WHERE id =".$_SESSION['pergunta'].";";
//    echo $queryPerguntas."<hr>";
//echo("<script>console.log('".$queryPerguntas."')</script>");
if ($resultPerguntas = $mysqli->query($queryPerguntas)) {
    while ($rowPerguntas = $resultPerguntas->fetch_assoc()) {
        $idPergunta = $rowPerguntas['id'];
        $enunciadoPergunta = $rowPerguntas['enunciado'];
        $nivelPergunta = $rowPerguntas['nivel'];

        $alternativa1Pergunta = $rowPerguntas['alternativa1'];
        $alternativa2Pergunta = $rowPerguntas['alternativa2'];
        $alternativa3Pergunta = $rowPerguntas['alternativa3'];
        $alternativa4Pergunta = $rowPerguntas['alternativa4'];

        $opcaocertaPergunta = $rowPerguntas['opcaocerta'];

        $myObj = new pergunta();
        $myObj->id = $idPergunta;
        $myObj->enunciado = $enunciadoPergunta;
        $myObj->nivel = $nivelPergunta;
        $myObj->alternativa1 = $alternativa1Pergunta;
        $myObj->alternativa2 = $alternativa2Pergunta;
        $myObj->alternativa3 = $alternativa3Pergunta;
        $myObj->alternativa4 = $alternativa4Pergunta;
        $myObj->opcaocerta= $opcaocertaPergunta;
        //echo("<script>console.log('".$myObj->str()."')</script>");
        $perguntaCompleta = $myObj;
        break;
        //array_push($perguntasDoNivel, $myObj);
    }
}
    
    
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include "head.php"; ?>
    </head>
    <body>
        
        <?php include "header.php"; ?>
        <!-- Begin page content -->
        <main role="main" class="container">
            <div class="row">
                <div class="col-8 col-md-8 container-fluid">
                <!-- -->
            <div class="card align-content-center">
                <div class="card-header">
                    <?php
                        
                        echo "#".$perguntaCompleta->id.") ".$perguntaCompleta->enunciado;
                        ?>
                </div>
                <div class="card-body">

                    <form autocomplete="off" method="post" action="responder.php">
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
                        Inicio:
                        <?php
                        $inicio = new DateTime();
                        $inicio->setTimeZone(new DateTimeZone('America/Buenos_Aires'));
                        $inicio->format('T');
                        $inicio = date_format($inicio, 'Y-m-d H:i:s');
                        $_SESSION['inicio']=$inicio;
                        echo ($inicio);?>
                    </p>
                </div>
            </div>
                <!-- -->
                </div>
                <div class="col-6 col-md-2 bg-dark">
                        <?php
                            $historico = "SELECT *, TIMEDIFF(fim,inicio) as `duracao` FROM `codepro_respostas` WHERE usuario=".json_decode($_SESSION['usuarioLogado'])->id."  ORDER BY id desc LIMIT 8";
//                            echo $historico;
                        if ($resultHistorico = $mysqli->query($historico)) {
                            while ($rowHistorico = $resultHistorico->fetch_assoc()) {
                                $idHist = $rowHistorico ['id'];
                                $perguntaHist = $rowHistorico ['pergunta'];
                                $resultadoHist = $rowHistorico ['resultado'];
                                $duracaoHist = $rowHistorico ['duracao'];
                                if($resultadoHist){
                                    echo "<p class='lead'><kbd style='background-color: #00FF0B'>$perguntaHist) $duracaoHist</kbd></p>";
                                } else{
                                    echo "<p class='lead'><kbd style='background-color: red'>$perguntaHist) $duracaoHist</kbd></p>";
                                }

                            }
                        }
                        ?>

                </div>
            </div>
        </main>
        <?php include "footer.php"; ?>
    </body>
</html>