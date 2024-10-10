<?php
include "./database/ligacao.php"

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Alunos</h3>
        <table>
            <tr>
                <th>Nome</th>
                <th>Data Nascimento</th>
                <th>Nr processo</th>
                <th>Telemovel</th>
                <th>Email</th>

            </tr>
            
            <?php

            $query = "Select * from alunos order by nome";
            $sql = mysqli_query($conn, query: $query);
            $leituras =mysqli_fetch_all(result: $sql, mode: MYSQLI_ASSOC);
            //var_dump($leituras);

            foreach ($leituras as $leitura) {
                ?>
                <tr>
                    <td><?=$leitura['Nome'] ?></td>
                    <td><?=$leitura['Datanascimento'] ?></td>
                    <td><?=$leitura['nr_processo'] ?></td>
                    <td><?=$leitura['telemovel'] ?></td>
                    <td><?=$leitura['e-mail'] ?></td>
                </tr>
               <?php
                


            }
            ?>
        </table>

    </div>
</body>
</html>