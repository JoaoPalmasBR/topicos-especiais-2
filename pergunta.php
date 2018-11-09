<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/10/2018
 * Time: 19:40
 */

class pergunta
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
        return '{"id":"'.$this->id.'", "enunciado": "'.$this->enunciado.'","nivel": "'.$this->nivel.'","opcaocerta": "'.$this->opcaocerta.'","alternativa1": "'.$this->alternativa1.'","alternativa2": "'.$this->alternativa2.'","alternativa3": "'.$this->alternativa3.'","alternativa4": "'.$this->alternativa4.'"}';
    }
    /*
    $myObj = new usuario();
    $myObj->id = "1";
    $myObj->nome = "joao";
    $myObj->email = "joao@joao.com";
    $myObj->senha = "joao";
    $myObj->tipo = "aluno";

    $myObj1 = new usuario();
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