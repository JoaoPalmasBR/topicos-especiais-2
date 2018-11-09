<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 25/10/2018
 * Time: 19:57
 */
session_start();
include "../carregarPerguntas.php";
include "../carregarUsuarios.php";
$perguntas = $_SESSION['perguntas'];
$usuarios = $_SESSION['usuarios'];
$usuarioLogado = json_decode($_SESSION['usuarioLogado']);

$perguntaCompleta = null;
$perguntasDoNivel = array();
foreach ($perguntas as $pergunta) {
    if ($pergunta->nivel == $usuarioLogado->nivel) {
        array_push($perguntasDoNivel,$pergunta);
    }
}
//print_r($perguntasDoNivel);
//echo "<hr>";
$selecionada = rand(0, count($perguntasDoNivel)-1);
//echo "$selecionada";
//echo "<hr>";
$perguntaCompleta = $perguntasDoNivel[$selecionada];
//print_r($perguntaCompleta);
    $_SESSION['perguntaCompleta'] = json_encode($perguntaCompleta);
    $perguntaCompleta1 = json_encode($perguntaCompleta);
    echo "<script>localStorage.setItem('perguntaCompleta','$perguntaCompleta1');</script>";
    echo "<script>location.assign('naotempergunta/')</script>";
?>