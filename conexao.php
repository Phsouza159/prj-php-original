<?php

$servidor = "localhost"; //onde está o banco *numero do ip do servidor.
$usuario = "root"; //usuário do banco.
$senha = ""; //senha do banco.
$banco = "trabalho_web"; //nome do esquema do banco.

$conexao = mysqli_connect($servidor, 
                         $usuario,
                         $senha);
if (!$conexao) 
    die ("Erro ao conectar o banco " . mysqli_error($conexao));
//else
    //echo "Conectado com sucesso.<br/>";

$select = mysqli_select_db($conexao, $banco);
if (!$select)
    echo "Erro ao selecionar o esquema. " . mysqli_error($conexao);
//else
//    echo "Esquema selecionado com sucesso."; 

?>