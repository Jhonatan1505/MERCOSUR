<?php
    require("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comerciales</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/mostrar.css">
    <link rel="stylesheet" href="CSS/header.css">
</head>
<body>
    <?php include("parches/header.php"); ?>
    <center>    
        <h1 class="titulo" >Relaciones comerciales</h1>
        <div id="main-container">

		<table>
			<thead>
				<tr>
					<th>Pais A</th>
                    <th>Pais B</th>
                    <th>Tipo</th>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Fecha de registro</th>
                    <th>Operacion</th>
				</tr>
			</thead>
            <?php
                $query="SELECT * FROM rcomerciales";
                $result_mercosur=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($result_mercosur)) { ?>
                    <tr>
                        <td> <?php echo $row['paisA'] ?> </td>
                        <td> <?php echo $row['paisB'] ?> </td>
                        <td> <?php echo $row['tipo'] ?> </td>
                        <td> <?php echo $row['producto'] ?> </td>
                        <td> <?php echo $row['descripcion'] ?> </td>
                        <td> <?php echo $row['fecha_registro'] ?> </td>
                        <td>
                            <a class="editar" href="editar.php?id=<?php echo $row['id']?>">Editar</a><br><br>
                            <a class="eliminar" href="eliminar.php?id=<?php echo $row['id']?>">Eliminar</a>
                        </td>
                    </tr>
                
            <?php } ?>

		</table>
	</div>
        
    </center>
</body>
</html>