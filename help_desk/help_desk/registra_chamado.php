<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
//Montando o texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);


$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

//Abrindo o arquivo
$arquivo = fopen('../valida_login/arquivo.hd', 'a');

//Escrevendo texto no arquivo
fwrite($arquivo, $texto);

//Fechando o arquivo
fclose($arquivo);



header('Location: abrir_chamado.php')

    ?>