<?php

require 'Database.php';

$meuBancoDeDados = new Database ();

print_r($meuBancoDeDados->getAll());