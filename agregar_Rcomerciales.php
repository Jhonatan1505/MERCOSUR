<?php
    include("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar RC</title>
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/agregar_Rcomerciales.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>

    <?php if(isset($_SESSION['message'])) {?>
         
            <script>
                alert('Relacion comercial agregada correctamente');
            </script>
         
    <?php session_unset();} ?>
   
    <?php include("parches/header.php"); ?>
    <center>
        <br>
        <h1>Agregar nueva relacion comercial</h1>
        <br>
        <form action="guardar.php" method="POST">
            <input type="text" name="paisA" placeholder="Ingresar primer país">
            <input type="text" name="paisB" placeholder="Ingresar segundo país">
            <select name="tipo">
                <option value="Union aduanera">Union aduanera</option>
                <option value="Alcance parcial">Alcance parcial</option>
                <option value="Cooperacion internacional">Cooperacion internacional</option>
                <option value="Libre comercio">Libre comercio</option>
                <option value="Union economica">Union economica</option>
            </select>
            <input type="text" name="producto" placeholder="Ingresar producto">
            <textarea name="descripcion" placeholder="Descripcion"></textarea>
            <input type="submit" name="agregar" value="Agregar">
        </form>
    </center>
</body>

</html>