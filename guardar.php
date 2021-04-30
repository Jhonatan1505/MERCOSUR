<?php
include("db.php");
if(isset($_POST["agregar"])){
    $paisA=$_POST["paisA"];
    $paisB=$_POST["paisB"];
    $tipo=$_POST["tipo"];
    $producto=$_POST["producto"];
    $descripcion=$_POST["descripcion"];
    
    $query="INSERT INTO rcomerciales(paisA, paisB, tipo, producto, descripcion) VALUES ('$paisA','$paisB','$tipo','$producto','$descripcion')";
    $result= mysqli_query($conn, $query);
    if (!$result){
        die("Error");
    }

    $_SESSION['message']='Relacion comercial agregada correctamente';
    
    header("Location: agregar_Rcomerciales.php");
}

?>