<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM rcomerciales WHERE id=$id";
        $result=mysqli_query($conn, $query);
        if(!$result){
            die("Error");
        }
        header("Location: rcomerciales_mostrar.php");
    }
?>