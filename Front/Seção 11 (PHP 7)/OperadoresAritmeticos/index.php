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
        $num1 = 13;
        $num2 = 4;

        echo "A soma entre $num1 e $num2 é" . ($num1 + $num2);
        echo "A subtração entre $num1 e $num2 é" . ($num1 - $num2);
        echo "A multiplicação entre $num1 e $num2 é" . ($num1 * $num2);
        echo "A divisão entre $num1 e $num2 é" . ($num1 / $num2);
        echo "O resto entre $num1 e $num2 é" . ($num1 % $num2);

        $atribuicao = 10;
        echo "<br> $atribuicao";
        $atribuicao +=5;
        echo "$atribuicao";
    ?>



</body>

</html>