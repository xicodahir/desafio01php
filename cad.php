<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001 usar ANTECESSOR e SUCESSOR PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
                    <h1><strong>Resultado Final</strong></h1>

        </header>
            <main>
                <P>
                    <?php
                     $n = $_REQUEST["num"] ?? 0;
                     $a = $n - 1;
                     $s = $n + 1;
                     echo "O número escolhido foi <strong>$n</strong>";
                    echo "<br> O seu antecessor é <strong>$a</strong>";
                    echo "<br> O seu sucessor é <strong>$s</strong>";
                    
                    ?>
                </P>

                <p>
                    <button onclick="javascript:history.go(-1)">&#x2B05 Voltar</button>
                </p>

            </main> 
        

</body>
</html>