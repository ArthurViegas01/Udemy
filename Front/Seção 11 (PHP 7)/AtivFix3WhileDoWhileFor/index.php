<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    
    $registros = array(
        array('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'),
        array('titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'),
    );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    echo '<br /><br /><br />';
    $idx = 0;
    $idx1 = 0;
    $idx2 = 0;
    $idx3 = 0;

    //count -> conta a quantidade de elementos de array
    echo 'O array possui ' . count($registros) . ' registros';
    

    echo '<br>';
    while ($idx1 < count($registros)) {
        echo '<h3>' . $registros[$idx1]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx1]['conteudo'] . '</p>';
        $idx1++;
    }
    


    echo '<br>';
    do {
        echo '<h3>' . $registros[$idx2]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx2]['conteudo'] . '</p>';
        $idx2++;
    } while ($idx2 < count($registros));



    echo '<br>';
    for ($idx3 = 0; $idx3 < count($registros); $idx3++) {
        echo '<h3>' . $registros[$idx3]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx3]['conteudo'] . '</p>';
    }

    ?>


</body>

</html>