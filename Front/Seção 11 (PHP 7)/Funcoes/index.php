<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php
        function exibirBoasVindas()
        {
            echo "Bem-vindo ao curso de PHP! <br>";
        }
    
        exibirBoasVindas();
    
        function calcularAreaTerreno($largura, $comprimento)
        {
            $area = $largura * $comprimento;
            return $area;
        }
    
        echo calcularAreaTerreno(5, 25);
        echo '<br>';
        echo calcularAreaTerreno(15, 125);
        echo '<br>';
        echo calcularAreaTerreno(50, 250);
        echo '<br>';
        echo calcularAreaTerreno(5, 30);
        echo '<br>';
    
        //Atribuir a uma variavel
        $resultado = calcularAreaTerreno(5, 25);
        echo "O valor da variavel resultado é $resultado";
    
    ?>


</body>

</html>