<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
    //=====================================================
    echo '<h3>Is_array -> verifica se o parâmetro passado é um array(true/false)</h3>';
    $array = array('notebook', 'teclado');
    $retorno = is_array($array);

    if ($retorno) {
        echo 'Sim, é um array';
    } else {
        echo 'Não, é um array';
    }
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Array_keys -> retorna todas as chaves de um array, armazenando em um novo array</h3>';
    $array2 = [1 => 'a', 2 => 'b', 18 => 'c'];

    echo '<pre>';
        print_r($array2);
    echo '</pre>';

    $chaves_array = array_keys($array2);
    echo '<pre>';
        print_r($chaves_array);
    echo '</pre>';
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Sort -> ela ordena o nosso array e reajusta o indice</h3>';
    $array3 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array3);
    echo '</pre>';

    sort($array3); //true ou false

    echo '<pre>';
        print_r($array3);
    echo '</pre>';
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Asort -> função análoga a sort, ordena um array preservando os indices</h3>';
    $array4 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array4);
    echo '</pre>';

    asort($array4); //true ou false

    echo '<pre>';
        print_r($array4);
    echo '</pre>';
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Count -> retorna um inteiro com a quantidade de elementos</h3>';
    $array5 = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array5);
        echo count($array5);
    echo '</pre>';
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Merge -> ela permite fundir vários arrays em um só</h3>';
    $arrayA = ['osx', 'windows'];
    $arrayB = array('linux');
    $arrayC = ['solaris'];

    $novo_array = array_merge($arrayA, $arrayB, $arrayC);
    echo '<pre>';
        print_r($novo_array);
    echo '</pre>';
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Explode -> Divide uma string baseada em um delimitador</h3>';
    $string = '26/04/2018';
    $array_retorno = explode('/', $string);
    echo '<pre>';
        echo $string;
        print_r($array_retorno);
        echo $array_retorno[2] . '-' . $array_retorno[1] . '-' . $array_retorno[0];
    echo '</pre>';
    echo '<hr>';
    //=====================================================



    //=====================================================
    echo '<h3>Implode -> junta os elementos de um array em uma string</h3>';
    $arrayF = ['a', 'b', 'x', 'y'];
    $string_retorno = implode('-', $arrayF);
    echo $string_retorno;
    //=====================================================
    ?>

</body>

</html>