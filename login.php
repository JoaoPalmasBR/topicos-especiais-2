<?php
    session_start();
    $userInput = $_POST['user'];
    $senhaInput = $_POST['senha'];
//    echo $userInput.": ".$senhaInput."<br>";
include "./carregarUsuarios.php";
//    print_r($usuarios);
    function login($usuarios, $userInput, $senhaInput){
//        print_r($usuarios);
//        print_r($userInput);
//        print_r($senhaInput);
        $achouusuario = false;
        foreach ($usuarios as $value) {
            if ($value->nome == $userInput){
        //            echo "usuario encontrado: $value->nome <br>";

                if ($value->senha == $senhaInput){
                    echo "<script>alert('Bem Vindo $userInput!')</script>";
                    $string = $value->str();
        //                echo $value->str();
                    echo '<script>localStorage.setItem("usuarioLogado","';
                    echo $string.'");</script>';

                    echo '<script>localStorage.setItem("usuarioTipo","'.$value->tipo.'")</script>';
                    echo '<script>localStorage.setItem("usuarioNome","'.$value->nome.'")</script>';

                    echo "<script>if (localStorage.getItem('usuarioTipo')=='aluno') {location.replace('./play/')};</script>";
                    echo "<script>if (localStorage.getItem('usuarioTipo')=='professor') {location.replace('./admin/')};</script>";
                } else {
                    echo "<script>alert('Senha Errada.')</script>";
                    echo "<script>location.assign('./')</script>";
                }
                $achouusuario = true;
                break;
            }
        }
        if (!$achouusuario){
        echo "<script>alert('Usuario não encontrado.')</script>";
        echo "<script>location.assign('./')</script>";
        }
    }

//    $key = array_search('joao', $lista);
//    echo "<script>console.clear(); console.log($usuarios);</script>";
    login($usuarios,$userInput,$senhaInput);
?>