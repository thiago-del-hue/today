<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #00ffd59c;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .container {
            background-color: #dbc3c3b0;
            border-radius: 10px;
            padding: 30px;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        .resultado {
            color: #2c3e50;
            font-weight: bold;
        }

        .comparacao {
            margin-top: 20px;
            padding: 10px;
            background-color: #e8f5e9;
            border-left: 5px solid #4caf50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $a = 15;
        $b = 15;
        echo "<h2>Calculadora Simples</h2>";
        echo "<p class='resultado'>A soma é: " . ($a + $b) . "</p>";

        $c = 34;
        $d = 21;
        echo "<p class='resultado'>A subtração é: " . ($c - $d) . "</p>";

        $e = 6;
        $f = 2;
        echo "<p class='resultado'>A multiplicação é: " . ($e * $f) . "</p>";

        $g = 64;
        $h = 8;
        echo "<p class='resultado'>A divisão é: " . ($g / $h) . "</p>";

        echo "<div class='comparacao'>";
        if ($a > $b) {
            echo "O valor de a ($a) é maior que o valor de b ($b).";
        } elseif ($a < $b) {
            echo "O valor de a ($a) é menor que o valor de b ($b).";
        } else {
            echo "O valor de a ($a) é igual ao valor de b ($b).";
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>