<?php

class Cidade {
    private$id;
    private $nome;

    function __construct($id, $nome)
    {   
        $this ->id = $id;
        $this -> nome = $nome;
    }
}

class Estado {
    private$id;
    private $uf;

    function __construct($id, $uf)
    {   
        $this ->id = $id;
        $this -> uf = $uf;
    }
}

$bahia = new Estado(17, 'BA');
$minas = new Estado (22, 'MG');

$salvador =  new Cidade(1, 'Salvador', $bahia);