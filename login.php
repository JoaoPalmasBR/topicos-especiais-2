<?php
    session_start();
    include ("usuario.php");
    include ("connect.php");
    if(isset($_POST['user'])){
        $userInput = $_POST['user'];
        $senhaInput = $_POST['senha'];
    }


    function login($userInput, $senhaInput){
//        include ("connect.php");
        include ("connect.php");
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

                $myObj = new usuario();
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
        //    print_r($usuarios);
        $achouusuario = false;
        foreach ($usuarios as $value) {
            if ($value->nome == $userInput){
//                echo "usuario encontrado: $value->nome <br>";
                if ($value->senha == $senhaInput){
//                    echo "<script>alert('Bem Vindo $userInput!')</script>";
                    $string = $value->str();
//                    echo $value->str();
                    echo '<script>localStorage.setItem("usuarioLogado","';
                    echo $string.'");</script>';
                    echo '<script>localStorage.setItem("usuarioTipo","'.$value->tipo.'")</script>';
                    echo '<script>localStorage.setItem("usuarioNome","'.$value->nome.'")</script>';

                    $_SESSION['usuario_id']=$value->id;
                    $_SESSION['usuario_tipo']=$value->tipo;
                    $_SESSION['usuario_nome']=$value->nome;
                    $_SESSION['usuario_xp']=$value->xp;
                    $_SESSION['usuario_nivel']=$value->nivel;

                    $_SESSION['usuarioLogado']=json_encode($value);
                    echo "<script>location.assign('loading.html')</script>";

                }
                else {
                    echo "<script>alert('Senha Errada.')</script>";
                    echo "<script>location.assign('./')</script>";
                }
                $achouusuario = true;
                break;
            }
        }
        if (!$achouusuario) {
            echo "<script>alert('usuario nao encontrado')</script>";
            echo "<script>location.assign('./')</script>";
        }
    }
//    $key = array_search('joao', $lista);
//    echo "<script>console.clear(); console.log($usuarios);</script>";
    if (isset($_POST['user'])) {
        login($userInput,$senhaInput);
    }
function relogin() {
    include ("connect.php");
    $id = $_SESSION['usuarioLogado']->id;
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
            echo '<script>localStorage.setItem("usuarioNivel","'.$myObj->nivel.'")</script>';

            $_SESSION['usuario_id']=$myObj->id;
            $_SESSION['usuario_tipo']=$myObj->tipo;
            $_SESSION['usuario_nome']=$myObj->nome;
            $_SESSION['usuario_xp']=$myObj->xp;
            $_SESSION['usuario_nivel']=$myObj->nivel;

            $_SESSION['usuarioLogado']=json_encode($myObj);
//            echo ("<script>location.assign('./play/quiz/acertou/');</script>");
            echo "<script>location.assign('loading.html')</script>";
        }
    }
}
    ?>