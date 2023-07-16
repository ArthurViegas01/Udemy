<?php

    if(!empty(print_r($_POST['usuario'])) &&! empty(print_r($_POST['senha']))){

    }

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        
        $conexao = new PDO($dsn, $usuario, $senha);
        
        $query = "select * from tb_usuarios where ";
        $query .= " email = :usuario ";
        $query .= " AND senha = :senha ";

        echo $query;

        $stmt = $conexao->prepare($query); //ele não executa diretamente a query, ele aguarda seu ok para executar
        
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha']);

        $stmt->execute(); //executa a query depois do bindValue

        $usuario = $stmt->fetch();

        print_r($usuario);


        // $query = '
        //     select * from tb_usuarios
        // ';

        // foreach ($conexao->query($query) as $chave => $valor) {
        //     print_r($valor[1]);
        //     echo'<hr/>';
        // }
        

        //$stmt = $conexao->query($query);

        // $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // //print_r($lista_usuarios);

        // foreach ($lista_usuarios as $key => $value) {
        //     echo $value['nome'];
        //     echo '<hr/>';
        // }


    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
    }

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" placeholder="usuário" name="usuario">
            <br>
            <input type="password" placeholder="senha" name="senha">
            <br>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>