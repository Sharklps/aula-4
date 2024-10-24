
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números de 100 a 200</title>
</head>
<body>
    <h1>Números Inteiros de 100 a 200 com Incremento de 2</h1>
    <ul>
        <?php
        
        for ($i = 100; $i <= 200; $i += 2) {
            echo "<li>" . $i . "</li>"; 
            
        }
        ?>
    </ul>
</body>
</html>
