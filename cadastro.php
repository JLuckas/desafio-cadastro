<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio Cadastro</title>
</head>

<body> 


<div id="container">
    <div id="campoInfos">
        <form method="post" name="cliente" action="logica/data.php">

            <h2 id="titulo">Cadastro de cliente</h2>

            <label>Nome: </label>
            <input type="text" name="nome" class="campoTexto"><br><br>
            <label>Idade: </label>
            <input type="text" name="idade" class="campoTexto"><br><br>
            <label >Cidade: </label>
            <input type="text" name="cidade" class="campoTexto"><br><br><br>
            <span>
                <input type="submit" name="cadastrar" value="Cadastrar" class="botao">
            </span>
        </form>
        
    </div>
    <span>
            <form method="get" nome="busca" action="logica/busca.php">
                
                <input type="submit" name="" value="Tabela de Clientes" class="botao">
                
            </form>
    </span>
</div>


</body>

</html>