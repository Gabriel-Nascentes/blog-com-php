<?php 
    include_once("/xampp/htdocs/dashboard/blog-php/helpers/url.php");
    include_once("/xampp/htdocs/dashboard/blog-php/data/posts.php");
    include_once("/xampp/htdocs/dashboard/blog-php/data/categories.php");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codar</title>
    <!-- Estilo do Projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <style>@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap');</style>
</head>
<body>
    <header> 
        <a href="<?= $BASE_URL ?>" id="logo">
        <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog">
        </a>
        <nav>
            <ul id="navbar">
                <li>
                    <a class="nav-link" href="<?= $BASE_URL ?>">Home</a>
                    <a class="nav-link" href="#">Categoria</a>
                    <a class="nav-link" href="#">Sobre</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>contatos.php">Contatos</a>
                </li>
            </ul>
        </nav>
    </header>  