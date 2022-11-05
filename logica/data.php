<?php include_once "config.php";?>
<?php 

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];

    $sql = "INSERT INTO clientes(nome, idade, cidade) VALUES('$nome', '$idade', '$cidade')";

    if (mysqli_query($conn, $sql)){
        header("Location: ../cadastro.php");
    }else{
        echo "Não foi possível se conectar com o banco de dados." . $sql . "<br>" . mysqli_error($conn);
    }
?>