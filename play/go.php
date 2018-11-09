<?php
    session_start();
    //echo "<script>location.assign('exec.php')</script>";
    
    include "../connect.php";
    include "../pergunta.php";
    //$usuarios = $_SESSION['usuarios'];
    //$usuarioLogado = json_decode($_SESSION['usuarioLogado']);
//    $perguntas = $_SESSION['perguntas'];
    echo("<script>console.clear();</script>");
    $perguntasDoNivel = array();
    $queryCont= "SELECT COUNT(*) as cont FROM `codepro_perguntas` WHERE id NOT IN( SELECT r.pergunta FROM `codepro_perguntas` AS `p` INNER JOIN `codepro_respostas` AS `r` ON p.id = r.pergunta WHERE r.usuario = ".$_SESSION['usuario_id']." AND r.resultado=1) AND nivel <= ".$_SESSION['usuario_nivel'].";";
    //    echo $queryPerguntas."<hr>";
    if ($resultCont = $mysqli->query($queryCont)) {
        while ($rowCont = $resultCont->fetch_assoc()) {
            $cont = $rowCont['cont'];
            if ($cont==0){
                echo "<script>location.assign('./naotempergunta/')</script>";
            }
        }
    }
$queryPerguntas= "SELECT * FROM `codepro_perguntas` WHERE id NOT IN( SELECT r.pergunta FROM `codepro_perguntas` AS `p` INNER JOIN `codepro_respostas` AS `r` ON p.id = r.pergunta WHERE r.usuario = ".$_SESSION['usuario_id']." AND r.resultado=1) AND nivel <= ".$_SESSION['usuario_nivel'].";";
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
        array_push($perguntasDoNivel, $myObj);
    }
}
//    print_r($perguntasDoNivel);
//    echo "<hr>";
//    echo "count ".count($perguntasDoNivel);
//    echo "<hr>";
$selecionada = rand(0, count($perguntasDoNivel)-1);
//echo("<script>console.log('cont: ".count($perguntasDoNivel)."')</script>");
//echo("<script>console.log('rand: ".$selecionada."')</script>");
//    echo $selecionada;
//    echo "<hr>";
$perguntaCompleta = $perguntasDoNivel[$selecionada];
//echo("<script>console.log('pergunta selecionada: ".$perguntaCompleta->str()."')</script>");
//echo("console.log('".json_encode($perguntaCompleta)."')</script>");
//    print_r($perguntaCompleta);
//$_SESSION['perguntaCompleta'] = json_encode($perguntaCompleta);
$_SESSION['pergunta'] = $perguntaCompleta->id;
//echo "<script>console.log('".$perguntaCompleta->id."');</script>";
//echo "<script>console.log('".$_SESSION['pergunta']."');</script>";

//echo("<script>console.log('sessao: ".$_SESSION['perguntaCompleta']."')</script>");
//$perguntaCompleta1 = $perguntaCompleta->str();
//    echo $perguntaCompleta1;
//echo "<script>localStorage.setItem('perguntaCompleta','".$perguntaCompleta->str()."');</script>";
//    echo "<hr>";

echo "<script>location.assign('quiz/')</script>";
?>