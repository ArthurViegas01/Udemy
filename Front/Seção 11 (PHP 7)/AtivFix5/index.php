<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php

        $numeros = array();

        while(count($numeros) <= 5){
            $num = rand(1,60);

            if(!in_array($num,$numeros)){
                $numeros[] = $num;
            }
        }

        print_r($numeros);
    ?>


</body>

</html>