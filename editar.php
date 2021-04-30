<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="SELECT * FROM rcomerciales WHERE id=$id";
        $result=mysqli_query($conn, $query);
        if(mysqli_num_rows($result)==1) {
            $row=mysqli_fetch_array($result);
            $paisA=$row['paisA'];
            $paisB=$row['paisB'];
            $tipo=$row['tipo'];
            $producto=$row['producto'];
            $descripcion=$row['descripcion'];
            
        }
    }
    if(isset($_POST['editar'])){
        $id=$_GET['id'];
        $paisA=$_POST['paisA'];
        $paisB=$_POST['paisB'];
        $tipo=$_POST['tipo'];
        $producto=$_POST['producto'];
        $descripcion=$_POST['descripcion'];
        
        $query="UPDATE rcomerciales set paisA='$paisA', paisB='$paisB', tipo='$tipo', producto='$producto', descripcion='$descripcion' WHERE id=$id"; 

        mysqli_query($conn, $query);
        header("Location:rcomerciales_mostrar.php");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/agregar_Rcomerciales.css">
</head>
<body>
    <?php
        include("parches/header.php");
    ?>
    <center>
    <h1>Editar Relaciones comerciales</h1>

    <form action="editar.php?id=<?php echo $_GET['id']; ?> " method="POST">
            <input type="text" name="paisA" value="<?php echo $paisA ?>">
            <input type="text" name="paisB" value="<?php echo $paisB ?>"  >
            <select name="tipo"  >
                <option value="Union aduanera">Union aduanera</option>
                <option value="Alcance parcial">Alcance parcial</option>
                <option value="Cooperacion internacional">Cooperacion internacional</option>
                <option value="Libre comercio">Libre comercio</option>
                <option value="Union economica">Union economica</option>
            </select>
            <input type="text" name="producto" value="<?php echo $producto ?>" >
            <textarea name="descripcion"><?php echo $descripcion ?></textarea>
            <input type="submit" name="editar" value="Editar">
        </form>
    </center>
</body>
</html>