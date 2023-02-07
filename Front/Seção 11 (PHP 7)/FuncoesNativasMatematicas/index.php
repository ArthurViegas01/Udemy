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
    $num = 7.5;

    //Arredonda para cima
    echo ceil($num);

    //Arredonda para baixo
    echo floor($num);

    //Arrendoda com base na fracao (.0 .4 -> para baixo) (.5 .9 -> para cima)
    echo round($num);

    //Gerar um falor aleatório (maior valor aleatório possível)
    echo rand(10, 20);

    //Descobre o valor maximo que pode ser aleatorio a depender do sistema operacional
    echo '<br />' . getrandmax();

    //Raiz quadrada
    echo sqrt(9);

    ?>
</body>

</html>