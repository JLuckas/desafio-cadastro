<?php include_once "config.php";?>
<?php 
    $id = $_GET['id'];
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
    mysqli_set_charset ($conn, "utf8");
    $result_nomes = "SELECT * FROM clientes WHERE id = '$id' LIMIT 1";
    $resultado_nomes = mysqli_query($conn, $result_nomes);
    while($linha = mysqli_fetch_array($resultado_nomes)){
        $id = $linha ['id'];
        $nome = $linha ['nome'];
        $idade = $linha ['idade'];
        $cidade = $linha ['cidade'];
    }
?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desafio Cadastro</title>
    </head>

    <body>

        <div id="container">
            <div id="campoInfos">
                <form method="post" name="cliente" action="att.php">

                    <label>Id: </label>
                    <input type="text" name="id" value="<?php echo $id; ?>" class="campoTexto"><br><br>
                    <label>Nome: </label>
                    <input type="text" name="nome" value="<?php echo $nome; ?>" class="campoTexto"><br><br>
                    <label>Idade: </label>
                    <input type="text" name="idade" value="<?php echo $idade; ?>" class="campoTexto"><br><br>
                    <label >Cidade: </label>
                    <input type="text" name="cidade" value="<?php echo $cidade; ?>" class="campoTexto"><br><br><br>
                    <input type="submit" name="salvar" value="Salvar" class="botao">
                    <br><br>

                </form>
                
            </div>
            <form method="get" nome="busca" action="busca.php">
                    
                    <input type="submit" name="" value="Tabela de Clientes" class="botao">
                    
                </form>
        </div>
    </body>

</html>