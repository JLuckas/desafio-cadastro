<?php include_once "config.php"; ?>
<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM clientes WHERE id='$id'";
    if(mysqli_query($conn, $sql)) {
        header("Location: busca.php");
    } else {
        echo 'Deu erro';
    }
?>