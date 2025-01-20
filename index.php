<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style001.css">    
</head>

    

<body>
    <main>
    <h1>Sorteador de números</h1>
        <?php  
        $min = 1;
        $max = 100;
        $randNumber = mt_rand($min, $max);

        echo "<p> Gerando um número aléatorio entre $min e $max...<br>O número sorteado é <strong> $randNumber </strong></p>";
         
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar novo número</button>
    </main>
</body>
</html>