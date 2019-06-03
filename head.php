<?php 
include_once "funcoes.php";

$usuario = logarUsuario("guilherme vieira", 1);

$produtos = [
    "produto1"=>["nome" => "cursoFullStack",
                "descricao" => "o curso encina programacao",
                "preco"=>1200, "img" => "img/img3.jpg"],

    "produto2"=>["nome" => "cursoAndroid",
                  "descricao" => "o curso encina a fazer app",
                  "preco"=>1400, "img" => "img/img2.jpg"],

    "produto3"=>["nome" => "cursoApple",
                  "descricao" => "o curso encina a fazer app Para Ios",
                  "preco"=>2100 , "img" => "img/img3.jpg"],

    "produto4"=>["nome" => "cursoApple",
                  "descricao" => "o curso encina a fazer app Para Ios",
                  "preco"=>2100 , "img" => "img/img2.jpg"],

                  
];

$produtos = addProduto("curso de ux","curso incrivel",2000, "img/img3.jpg",$produtos);

$produtos = addProduto("curso de extra","curso incrivel",100, "img/img2.jpg",$produtos);




$categorias = [
    "curso",
    "tutorias",
    "artigos",
    "forum",
    "codigos"
];

?>

<head>
    <title>Loja Virtual</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>