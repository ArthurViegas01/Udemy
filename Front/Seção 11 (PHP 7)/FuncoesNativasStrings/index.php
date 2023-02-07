<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $texto = 'Curso completo de PHP';

    //String to lower
    echo $texto . '<br />';
    echo strtolower($texto);
    echo '<hr/>';

    //String to upper
    echo $texto . '<br />';
    echo strtoupper($texto);
    echo '<hr/>';

    //Upper case first
    echo $texto . '<br />';
    echo ucfirst($texto);
    echo '<hr/>';

    //String length
    echo $texto . '<br />';
    echo strlen($texto);
    echo '<hr/>';

    //String replace
    echo $texto . '<br />';
    echo str_replace('.', ',', '22.20'); // é case-sensitive
    echo '<hr/>';

    //String 
    echo $texto . '<br />';

    //'Curso Completo de PHP'
    //0,1,2,3,4,5 ... 20
    echo substr($texto, 0, 14) . '...';
    echo '<hr/>';



    ?>
</body>

</html>