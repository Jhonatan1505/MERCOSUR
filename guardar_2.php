<?php
include("db.php");
if(isset($_POST["agregar"])){
    $nombre=$_POST["nombre"];
    $paisA=$_POST["paisA"];
    $paisB=$_POST["paisB"];
    $paisC=$_POST["paisC"];
    $descripcion=$_POST["descripcion"];
    
    $query="INSERT INTO rdiplomaticas_2(nombre, paisA, paisB, paisC, descripcion) VALUES ('$nombre','$paisA','$paisB','$paisC','$descripcion')";
    $result= mysqli_query($conn, $query);
    if (!$result){
        die("Error");
    }

    $_SESSION['message']='Relacion diplomatica agregada correctamente';
    
    header("Location: agregar_Rdiplomaticas_2.php");
}

?>