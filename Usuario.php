<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/10/2018
 * Time: 19:40
 */

class Usuario
{
    public $id;
    public $nomecompleto;
    public $nome;
    public $email;
    public $senha;
    public $tipo;
    public $nivel;
    public $xp;

    function str() {
        return "{'id':'$this->id', 'nome': '$this->nome','nomecompleto': '$this->nomecompleto','tipo': '$this->tipo','nivel': '$this->nivel','xp': '$this->xp'}";
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