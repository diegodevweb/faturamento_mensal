<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Faturamento Mensal e Porcentagens</title>
</head>
<body>
    <section>
        <pre>
            <?php
            $sp = 67836.43;
            $rj = 36678.66;
            $mg = 29229.88;   
            $es = 27165.48;
            $outros = 19849.53;
            $soma = ($sp + $rj + $mg + $es + $outros);
            $total = number_format($soma, 2, ",",".");
            
            echo "</br>Valor total do faturamento: $total";
            echo "</br></br>Percentual de representação de cada estado: ";

            $porcentSp = ($sp * 100) / $soma;
            echo "</br></br>São Paulo: ".number_format($porcentSp, 2,",",".")."%";
            $porcentRj = ($rj * 100) / $soma;
            echo "</br>Rio de Janeiro: ".number_format($porcentRj, 2,",",".")."%";
            $porcentMg = ($mg * 100) / $soma;
            echo "</br>Minas Gerais: ".number_format($porcentMg, 2,",",".")."%";
            $porcentEs = ($es * 100) / $soma;
            echo "</br>Espírito Santo: ".number_format($porcentEs, 2,",",".")."%";
            $porcentOutros = ($outros * 100) / $soma;
            echo "</br>Outros: ".number_format($porcentOutros, 2,",",".")."%";

            ?>

            <a href="index.html"><input type="button" value="Voltar" id="voltar"></a>
        </pre>
    </section>
</body>
</html>

