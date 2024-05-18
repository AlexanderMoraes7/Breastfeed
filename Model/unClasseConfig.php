<?php
class Config {

// PDO - Biblioteca de acesso a dados do php

$servename = getServer();
$database = getBanco();
$username = getUsuario();
$password = getSenha();
$pdo = new PDO("mysql:host=localhost;dbname=cardapio", "root", "root");

//($servename, $database, $username, $password);
//("mysql:host=localhost;dbname=cardapio", "root", "root");

}