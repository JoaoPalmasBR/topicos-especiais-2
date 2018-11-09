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
    $usuarioLogado = json_decode($_SESSION['usuarioLogado']);
    
//    print_r($_SESSION['inicio']."<hr>");

    $final = new DateTime();
    $final->setTimeZone(new DateTimeZone('America/Buenos_Aires'));
    $final->format('T');
    $final = date_format($final, 'Y-m-d H:i:s');
    $_SESSION['final']=$final;
//    print_r($_SESSION['final']."<hr>");
    //    echo $final."<hr>";

//    print_r($usuarioLogado);
//    echo "<hr>";
    $resultado = null;
    $opcao = $_POST['opcao'];
    if(!isset($opcao)){
        echo "<script>location.assign('responda/')</script>";
    }
//    echo "Opcao Escolhida: ".$opcao."<hr>";
//    print_r("Opcao Certa: ".$perguntaCompleta->opcaocerta);
//    echo "<hr>";
//    echo "Resultado: ";
    $pontos = 0;
    if ($opcao===$perguntaCompleta->opcaocerta) {
//        echo "<a style='background-color: green; color: white;'>Correto</a>";
//        echo "<hr>";
        $resultado = true;
        if($perguntaCompleta->nivel == 1){$pontos=50;}
        if($perguntaCompleta->nivel == 2){$pontos=100;}
        if($perguntaCompleta->nivel == 3){$pontos=200;}
//        echo "$pontos<hr>";
    }
else {
//        echo "<a style='background-color: red; color: white;'>Errado</a>";
        $resultado = false;
    }

    $query = "INSERT INTO `codepro_respostas`(`usuario`, `pergunta`, `resultado`, `inicio`, `fim`) VALUES 
  ('" . $usuarioLogado->id . "','" . $perguntaCompleta->id . "','" . $resultado . "','" . $_SESSION['inicio'] . "','" . $_SESSION['final'] . "');";
    if ($resultado){
        if((($usuarioLogado->xp+$pontos)>=700) && (($usuarioLogado->xp+$pontos)<1400)){
            $query .= " UPDATE `codepro_usuarios` SET `nivel` = '2' WHERE `codepro_usuarios`.`id` = ".$usuarioLogado->id.";";
            echo ("<script>localStorage.setItem('subiu','2');</script>");
            // colocar animacao de subir de nivel
        }
        if(($usuarioLogado->xp+$pontos)>1400){
            echo ("<script>localStorage.setItem('subiu','2');</script>");
            $query .= " UPDATE `codepro_usuarios` SET `nivel` = '3' WHERE `codepro_usuarios`.`id` = ".$usuarioLogado->id.";";
            // colocar animacao de subir de nivel
        }
        $query .= " UPDATE `codepro_usuarios` SET `xp` = '".($usuarioLogado->xp+$pontos)."' WHERE `codepro_usuarios`.`id` = ".$usuarioLogado->id.";";
    }
//    echo $query;
//    echo "<hr>";
        if (mysqli_multi_query($mysqli, $query)) {
        } else {
            echo ("<script>location.assign('./erro/');</script>");
        }
    if ($resultado) {
        echo ("<script>location.assign('./acertou/');</script>");

    }
    else {
        echo ("<script>location.assign('./errou/');</script>");
    }


?>