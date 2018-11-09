<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/10/2018
 * Time: 20:56
 */
    include ("pergunta.php");
    include "connect.php";
    $perguntas = array();
    $queryPerguntas = "SELECT * FROM `codepro_perguntas`;";
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
            array_push($perguntas, $myObj);
        }
    }
    $_SESSION['perguntas']=$perguntas;
?>