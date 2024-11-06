<?php
// Incluindo as configurações de cabeçalho
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="public/sass/style.css">
</head>
<body>
    <header class="header">
        <nav>
            <a href="index.php">
                <img src="public/assets/logo.png" alt="Logo Senac" class="header-logo">
            </a>
            <ul>
                <li><a href="index.php">Cursos</a></li>
                <li><a href="index.php">Biblioteca</a></li>
                <li><a href="index.php">Alunos</a></li>
                <li><a href="index.php">Contato</a></li>
                <li class="nav-icon">
                    <img src="public/assets/search.png" alt="search">
                </li>
                <li id="menu-toggle" class="nav-icon">
                    <img id="menu-icon" src="public/assets/openMenu.png" alt="Menu">
                </li>
            </ul>
        </nav>
    </header>

    <script>
        // Referências dos elementos.
        const menuIcon = document.getElementById('menu-icon');
        const menuToggle = document.getElementById('menu-toggle');

        // Função para alternar entre as imagens do menu.
        menuToggle.addEventListener('click', function() {
            if (menuIcon.src.includes('openMenu.png')) {
                menuIcon.src = 'public/assets/closedMenu.png';
            } else {
                menuIcon.src = 'public/assets/openMenu.png';
            }
        });
    </script>