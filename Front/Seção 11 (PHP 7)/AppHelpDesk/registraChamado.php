<?php

    session_start();

    echo '<pre>';
    echo print_r($_POST);
    echo '</pre>';

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //ARRUMAR CAMINHO CASO PASTA SEGURANCA NAO ESTEJA DENTRO DE APPHELPDESK
    $arquivo = fopen('../AppHelpDesk/seguranca/arquivo.hd', 'a');


    fwrite($arquivo, $texto);

    fclose($arquivo);

    echo $texto;

    header('Location: abrir_chamado.php');


    

  


?>