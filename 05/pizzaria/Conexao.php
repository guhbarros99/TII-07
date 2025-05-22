<?php

// SINGLETON - https://refactoring.guru/design-patterns/singleton
class Conexao {
    public static function getInstance() {
         return new PDO("mysql:host=localhost;dbname=pizzaria_senac", 'root', '');
    }
}
?>