<?php
require_once("helpers/url.php");
require_once("data/posts.php");
require_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Blog Code</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Code">
            <label class="switch tema" for="toggle-theme">
                <input type="checkbox" id="toggle-theme">
                <span class="slider"></span>
            </label>
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
        <script>
            const toggleSwitch = document.querySelector('#toggle-theme');

            toggleSwitch.addEventListener('change', switchTheme, false);

            function switchTheme(e) {
                if (e.target.checked) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                } else {
                    document.documentElement.setAttribute('data-theme', 'light');
                }
            }
        </script>
    </header>