<?php
    # /usuarios.php
    // require('verifica_login.php');
    require('carregar_twig.php');
    
    require('models/Model.php');
    require('models/Usuario.php');

    $usr = new Usuario();
    $usuarios = $usr->getAll();

    echo $twig->render('usuarios.html', [
        'usuarios' => $usuarios
    ]);