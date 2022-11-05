<?php include_once "config.php";?>
<?php 
    
    $result_nomes = "SELECT * FROM clientes";
    $resultado = mysqli_query($conn , $result_nomes);
    
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desafio Cadastro</title>
    </head>

    <body>
        <div id="tbClientes">
            <table>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        Idade
                    </th>
                    <th>
                        Cidade
                    </th>
                    <th>

                    </th>
                </tr>
                <?php

                    $colmax = 1;
                    $i = 0;
                    echo "<tr>";
                        while ($linha = mysqli_fetch_array($resultado)){

                            if ($i == $colmax){
                                $i = 0;
                                echo "</tr><tr>";                                
                            }

                            echo "<td>", $id = $linha['id'], "</td>";
                            echo "<td>", $nome = $linha['nome'],"</td>";
                            echo "<td>", $idade = $linha['idade'], "</td>";
                            echo "<td>", $cidade = $linha['cidade'], "<br></td>";
                            echo "<td>", ' <a href=delete.php?id='.$linha['id'].'>Deletar</a> <br> <a href=editar.php?id='.$linha['id'].'>Editar</a>',"</td>";
                            $i++;
                        };

                        echo "</tr>";
                        echo "</table>";
                ?>
        </div>

        <div id="nav">

            <form action="../cadastro.html">
                <br><br><input type="submit" name="cadastro" value="Voltar à tela de cadastro" class="botao">
            </form>

        </div>
    </body>
</html>