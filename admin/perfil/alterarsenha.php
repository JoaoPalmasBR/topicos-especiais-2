<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 08/11/2018
 * Time: 20:39
 */
session_start();
$usuarioLogado = json_decode($_SESSION['usuarioLogado']);
include "../../connect.php";
include ("../../usuario.php");
$senhanova = $_POST['exampleInputPassword1'];
$query= "UPDATE `codepro_usuarios` SET `senha` = '".addslashes($senhanova)."' WHERE `codepro_usuarios`.`id` = ".$usuarioLogado->id.";";
//print_r($query);
if (mysqli_multi_query($mysqli, $query)) {
    $id = json_decode($_SESSION['usuarioLogado'])->id;
    $queryUsuario = "SELECT * FROM `codepro_usuarios` where id=$id;";
    if ($resultUsuario = $mysqli->query($queryUsuario)) {
        while ($rowUsuario = $resultUsuario->fetch_assoc()) {
            $idUsuario = $rowUsuario['id'];
            $nomecompletoUsuario = $rowUsuario['nomecompleto'];
            $nomeUsuario = $rowUsuario['nome'];
            $emailUsuario = $rowUsuario['email'];
            $senhaUsuario = $rowUsuario['senha'];
            $tipoUsuario = $rowUsuario['tipo'];
            $nivelUsuario = $rowUsuario['nivel'];
            $xpUsuario = $rowUsuario['xp'];

            $myObj = new usuario();
            $myObj->id = $idUsuario;
            $myObj->nomecompleto = $nomecompletoUsuario;
            $myObj->nome = $nomeUsuario;
            $myObj->email = $emailUsuario;
            $myObj->senha = $senhaUsuario;
            $myObj->tipo = $tipoUsuario;
            $myObj->nivel = $nivelUsuario;
            $myObj->xp= $xpUsuario;
            $string = $myObj->str();
            echo "<script>localStorage.setItem('usuarioLogado','".$string."');</script>";
            echo '<script>localStorage.setItem("usuarioTipo","'.$myObj->tipo.'")</script>';
            echo '<script>localStorage.setItem("usuarioNome","'.$myObj->nome.'")</script>';
            $_SESSION['usuario_id']=$myObj->id;
            $_SESSION['usuario_tipo']=$myObj->tipo;
            $_SESSION['usuario_nome']=$myObj->nome;
            $_SESSION['usuario_xp']=$myObj->xp;
            $_SESSION['usuario_nivel']=$myObj->nivel;

            $_SESSION['usuarioLogado']=json_encode($myObj);
//            echo ("<script>location.assign('./play/quiz/acertou/');</script>");
            echo "<script>location.assign('../../loading.html')</script>";
        }
    }
}
else {
    echo ("<script>location.assign('./erroaoalterarsenha/');</script>");
}
