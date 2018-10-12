<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/10/2018
 * Time: 20:56
 */

include "/Usuario.php";
include "/connect.php";

$usuarios = array();
$queryUsuarios = "SELECT * FROM `codepro_usuarios`;";
if ($resultUsuarios = $mysqli->query($queryUsuarios)) {
    while ($rowUsuarios = $resultUsuarios->fetch_assoc()) {
        $idUsuario = $rowUsuarios['id'];
        $nomecompletoUsuario = $rowUsuarios['nomecompleto'];
        $nomeUsuario = $rowUsuarios['nome'];
        $emailUsuario = $rowUsuarios['email'];
        $senhaUsuario = $rowUsuarios['senha'];
        $tipoUsuario = $rowUsuarios['tipo'];
        $nivelUsuario = $rowUsuarios['nivel'];
        $xpUsuario = $rowUsuarios['xp'];

        $myObj = new Usuario();
        $myObj->id = $idUsuario;
        $myObj->nomecompleto = $nomecompletoUsuario;
        $myObj->nome = $nomeUsuario;
        $myObj->email = $emailUsuario;
        $myObj->senha = $senhaUsuario;
        $myObj->tipo = $tipoUsuario;
        $myObj->nivel = $nivelUsuario;
        $myObj->xp= $xpUsuario;
        array_push($usuarios, $myObj);
    }
}
$_SESSION['usuarios']=$usuarios;
?>