<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM rdiplomaticas_1 WHERE id=$id";
        $result=mysqli_query($conn, $query);
        if(!$result){
            die("Error");
        }
        header("Location: rdiplomaticas_mostrar.php");
    }
?>