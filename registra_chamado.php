<?php

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']); 
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] ."#".$_POST['titulo']."#".$_POST['categoria']."#".$_POST['descricao'] . PHP_EOL;

    $arquivo = fopen('arquivo.txt', 'a');
    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location: abrir_chamado.php')

?>