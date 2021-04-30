<?php
include("db.php");
if(isset($_POST["agregar"])){
    $nombre=$_POST["nombre"];
    $paisA=$_POST["paisA"];
    $paisB=$_POST["paisB"];
    $descripcion=$_POST["descripcion"];
    
    $query="INSERT INTO rdiplomaticas_1(nombre, paisA, paisB, descripcion) VALUES ('$nombre','$paisA','$paisB','$descripcion')";
    $result= mysqli_query($conn, $query);
    if (!$result){
        die("Error");
    }

    $_SESSION['message']='Relacion diplomatica agregada correctamente';
    
    header("Location: agregar_Rdiplomaticas_1.php");
}

?>