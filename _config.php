<?php

/** 
 * Configuração do aplicativo
 * 
 * By Alirio - aliriocelestino@hotmail.com
*/

// PHP em UTF-8

header('Content-type: text/html; charset=utf-8;');

// Conexão com MySQL

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    
    // Conexão com o MySQL do XAMPP
    // (Servidor do mysql, usuário, senha, nome do db)
    $conn = new mysqli('localhost', 'root', '', 'intranet');

    // Se não estou no XAMPP estou no provedor de hospedagem
} else {

    // Conexão com o MySQL do provedor
    // (servidor do mysql, usuário, senha, nome do db)
    // Obtidos do painel de controles do provedor de hospedagem
    
    $conn = new mysqli('', '', '', '');
}

// Checa conexão
if ($conn->connect_error) {
    die("Falha de conexão com o Banco de Dados: " . $conn->connect_error);
}

// Ajustes na conexão

$conn->query('SET NAMES utf8');
$conn->query('SET character_set_client=utf8');
$conn->query('SET character_set_connection=utf8');
$conn->query('SET character_set_results=utf8');

// Datas em pt-BR
$conn->query('SET GLOBAL lc_time_names=pt_BR');
$conn->query('SET lc_time_names=pt_BR');





/***** Define variáveis do aplicativo (virão do DB) *****/

// Nome do site
$_C['SITENAME'] = 'Solight';

// Slogan do site
$_C['SITESLOGAN'] = 'Energia Para Todos';

// Título da página
$_C['TITLE'] = '';

// CSS da página
$_C['CSS'] = '';

// JavaScript da página
$_C['JS'] = '';

// Redes Sociais
$_C['facebook'] = 'https://facebok.com/solight';
$_C['youtube'] = 'https://youtube.com/solight';
$_C['twitter'] = 'https://twitter.com/solight';
$_C['instagram'] = 'https://instagram.com/solight';

// Outra Variáveis

$_C['copyright'] = '&copy; Copyright 2021 Alirio B. Celestino';
