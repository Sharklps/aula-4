
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Ímpares de 500 a 1000</title>
</head>
<body>
    <h1>Números Ímpares de 500 a 1000</h1>
    <ul>
        <?php
        for ($numero = 501; $numero < 1000; $numero += 2) {
            echo "<li>$numero</li>";
        }
        // Adicionando 999 se estiver dentro do intervalo
        if ($numero == 1000) {
            echo "<li>999</li>";
        }
        ?>
    </ul>
</body>
</html>
