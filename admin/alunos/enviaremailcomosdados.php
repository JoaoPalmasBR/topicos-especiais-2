<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 09/11/2018
 * Time: 03:31
 */
session_start();
$usuarioareceber=$_GET['usuarioareceber'];
ini_set('display_errors', 1);
error_reporting(E_ALL);
include "../../connect.php";
$queryUsuario = "SELECT * FROM `codepro_usuarios` where id=$usuarioareceber;";

$idUsuario = null;
$nomeUsuario = null;
$nomecompletoUsuario = null;
$nivelUsuario = null;
$xpUsuario = null;
$senhaUsuario = null;
$emailUsuario = null;
if ($resultUsuario = $mysqli->query($queryUsuario)) {
    while ($rowUsuario = $resultUsuario->fetch_assoc()) {
        $idUsuario = $rowUsuario['id'];
        $nomeUsuario = $rowUsuario['nome'];
        $nomecompletoUsuario = $rowUsuario['nomecompleto'];
        $nivelUsuario = $rowUsuario['nivel'];
        $xpUsuario = $rowUsuario['xp'];
        $senhaUsuario = $rowUsuario['senha'];
        $emailUsuario = $rowUsuario['email'];
//        echo "$idUsuario, $nomeUsuario, $senhaUsuario $nomecompletoUsuario, $nivelUsuario, $xpUsuario, $emailUsuario <br>";
    }
}
$nomes = explode(" ", $nomecompletoUsuario);
$from = "joao@joao.palmas.br";
$to = "joao@joaoantoniosantos.com.br";
$subject = "Verificando o correio do PHP";
$message = "O correio do PHP funciona bem";
$headers = "De:". $from;
// É necessário indicar que o formato do e-mail é html
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8"."\r\n";
$headers .= "Reply-To: webmaster@example.com"."\r\n";
$headers .= "From: Suporte CodePRO <contato@beta.codepro.joao.palmas.br>";

/*
 * NAO VAI NO EMAIL
 * <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 * <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 *
 */
$css = addslashes(file_get_contents ("https://joao.palmas.br/codepro/beta/admin/alunos/bootstrap.min.css"));
$conteudo = "
    <style>
        kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#212529;border-radius:.2rem;}
        .alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}
        .alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}
        .alert-warning hr{border-top-color:#ffe8a1}
        .alert-warning .alert-link{color:#533f03}
        .alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}
        .alert-success hr{border-top-color:#b1dfbb}
        .alert-success .alert-link{color:#0b2e13}
        
        .btn{display:inline-block;font-weight:400;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}
        .btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}
        
        .btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}
        .btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}
        .btn-secondary.focus,.btn-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}
        .btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}
        .btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}
        .btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}
        a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}
        a{text-decoration: none;color: initial;}
    </style>
        <table style='width:100%; text-align: center;'>
            <tr style='text-align: center;'>
                <th><h3><img height='50' src=\"https://joao.palmas.br/codepro/beta/logo.png\" title='codePRO'></h3></th>
            </tr>
            <tr style='text-align: center;'>
                <th><h1>Até que em fim <b>Pequeno Gafanhoto</b>.</h1></th>
            </tr>
            <tr style='text-align: center;'>
                <td><p>Olá ".$nomes[0]." ".$nomes[1].", tudo bem? Preparado para começar esse desafio?</p></td>
            </tr>
            <tr style='text-align: center;'>
                <td><p>Seus dados de acesso são: </p></td>
            </tr>
        </table>
        <center>
        <table style='width: 50%;'>
                    <tr style='text-align: center;'>
                        <td><b>Usuario: </b></td>
                        <td><kbd>$nomeUsuario</kbd></td>
                    </tr>
                    <tr style='text-align: center;'>
                        <td><b>Senha: </b> </td>
                        <td><kbd>$senhaUsuario</kbd></td>
                    </tr>
                </table>
        </center>
        <center>
            <div class='alert alert-warning' style='width: 50%;'>
                Lembrando que lhe demos 50 pontos pra começar. \xF0\x9F\x98\x81
           </div>
        </center>
        <center>
            <a href='https://joao.palmas.br/codepro/' title='acessar' target='_blank' class='btn btn-lg btn-secondary'>Acesse</a>
        </center>
        <center>
            <div class='alert alert-success' style='width: 50%;'>
                Nos vemos em breve.
           </div>
        </center>
    
";
//print_r($headers);
print_r($conteudo);

ini_set('smtp_port',465);
ini_set("SMTP", "mail.joaoantoniosantos.com.br");
$enviaremail = mail('joao@joaoantoniosantos.com.br', 'Bem Vindo ao CodePRO, '.$nomes[0], $conteudo);

if($enviaremail){
//    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
//    echo " <meta http-equiv='refresh' content='10;URL=index.php'>";
    $mgm = "E-MAIL Enviado!";
    echo "<script>console.log('E-MAIL Enviado!');</script>";
//    echo $mgm;
} else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "<script>console.log('E-MAIL NAO Enviado!');</script>";
//    echo $mgm;
}
echo "<style>/* The snackbar - position it at the bottom and in the middle of the screen */
#snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */
    /* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
   However, delay the fade out process for 2.5 seconds */
   -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
   animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}</style>";
echo "<script>function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById(\"snackbar\");

    // Add the \"show\" class to DIV
    x.className = \"show\";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace(\"show\", \"\"); }, 3000);
}</script>";