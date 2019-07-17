<?php
    echo('<pre>');
    print_r($_GET);
    echo('</pre>');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
        <div>Como conheceu nosso site</div>
        <label for="carta">
            <input type="checkbox" name="carta" id="carta">
            Por carta
        </label>

        <label for="carta">
            <input type="checkbox" name="google" id="google">
            Pelo google
        </label>

        <label for="carta">
            <input type="checkbox" name="amigo" id="amigo">
            Por amigo
        </label>

        <label for="outros">
            <input type="text" name="outros" id="outros">
            Por outros
        </label>

        <button type="submit">Enviar</button>
        

    </form>
</body>
</html>