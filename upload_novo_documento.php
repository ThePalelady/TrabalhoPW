<?php
# documentos_novo.php
require('carregar_twig.php');
require('func/sanitize_namefile.php');
require('func/verificar_nome_arquivo.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !$_FILES['arquivo']['error']) {

    $arquivo = sanitize_namefile($_FILES['arquivo']['name']);

    $arquivo = verificar_nome_arquivo('uploads/', $arquivo);

    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploads/' . $arquivo);

}

echo $twig->render('documentos_novo.html');
