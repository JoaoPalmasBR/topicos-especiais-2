<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/10/2018
 * Time: 19:40
 */

class Pergunta
{
    public $id;
    public $enunciado;
    public $nivel;

    public $alternativa1;
    public $alternativa2;
    public $alternativa3;
    public $alternativa4;
    public $opcaocerta;

    function str() {
        return "{'id':'$this->id', 'enunciado': '$this->enunciado','nivel': '$this->nivel'}";
    }
    /*
    $myObj = new Usuario();
    $myObj->id = "1";
    $myObj->nome = "joao";
    $myObj->email = "joao@joao.com";
    $myObj->senha = "joao";
    $myObj->tipo = "aluno";

    $myObj1 = new Usuario();
    $myObj1->id = "2";
    $myObj1->nome = "helo";
    $myObj1->email = "helo@helo.com";
    $myObj1->senha = "helo";
    $myObj1->tipo = "professor";

    $lista = [$myObj,$myObj1];
    $usuarios=json_encode ($lista);
    //    $usuarios=json_encode("[{\"id\":1,\"nome\":\"joao\",\"senha\":\"joao\",\"tipo\":\"aluno\"},{\"id\":2,\"nome\":\"helo\",\"senha\":\"helo\",\"tipo\":\"professor\"}]");
    print_r($usuarios);
    echo "<br>";
    */
}