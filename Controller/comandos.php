<?php

require('../Model/unClasseConfig.php');
//include "../Model/unClasseConfig.php";

$email=$_POST["email"];
$senha=$_POST["senha"];

// Inserir usuários no banco de dados
$pdo->exec("INSERT INTO usuarios(email, senha) VALUES 
            (',$email,', (select md5(',$senha,')))");
