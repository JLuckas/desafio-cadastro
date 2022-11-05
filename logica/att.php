<?php include_once "config.php";?>
<?php 

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cidade = $_POST['cidade'];

    $sql = "UPDATE clientes SET nome = '$nome', idade = '$idade', cidade = '$cidade' WHERE id = '$id'";

    if (mysqli_query($conn, $sql)){
        header("Location: busca.php");
    }else{
        echo "Não foi possível atualizar as informações no banco de dados." . $sql . "<br>" . mysqli_error($conn);
    }
?>
