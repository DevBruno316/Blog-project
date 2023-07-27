<?php

include_once ("helpers/url.php");
include_once ("data/categorias.php");
include_once ("data/posts.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog codar</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/CSS/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
</head>
<body>

<header>


    <a href="<?= $BASE_URL?>" id="logo"><img src="<?= $BASE_URL?>img/logo.svg" alt=""></a>
<nav >
    <ul id="navbar">
        <li><a href="<?= $BASE_URL?>" class="nav-link">home</a></li>
        <li><a href="#" class="nav-link" >Categorias</a></li>
        <li><a href="" class="nav-link" >home</a></li>
        <li><a href="<?= $BASE_URL?>/contact.php" class="nav-link">contatos</a></li>
    </ul>
</nav>
</header>