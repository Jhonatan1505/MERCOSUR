<?php
    require("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diplomaticas</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/mostrar.css">
    <link rel="stylesheet" href="CSS/header.css">
</head>
<body>
    <?php include("parches/header.php"); ?>
    <center>    
        <h1 class="titulo" >Relaciones Diplomaticas</h1>
        <div id="main-container">

        <h2 id="subtitulo_1"> Relaciones Bilaterales</h2>
        <br>
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
                    <th>Pais A</th>
                    <th>Pais B</th>
                    <th>Descripcion</th>
                    <th>Fecha de registro</th>
                    <th>Operacion</th>
				</tr>
			</thead>
            <?php
                $query="SELECT * FROM rdiplomaticas_1";
                $result_mercosur=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($result_mercosur)) { ?>
                    <tr>
                        <td> <?php echo $row['nombre'] ?> </td>
                        <td> <?php echo $row['paisA'] ?> </td>
                        <td> <?php echo $row['paisB'] ?> </td>
                        <td> <?php echo $row['descripcion'] ?> </td>
                        <td> <?php echo $row['fecha_registro'] ?> </td>
                        <td>
                            <a class="editar" href="editar_1.php?id=<?php echo $row['id']?>">Editar</a><br><br>
                            <a class="eliminar" href="eliminar_2.php?id=<?php echo $row['id']?>">Eliminar</a>
                        </td>
                    </tr>
                
            <?php } ?>

		</table>
        <br>
        <h2 id="subtitulo_2"> Relaciones Multilaterales</h2>
        <br>
        <table>
			<thead>
				<tr>
					<th>Nombre</th>
                    <th>Pais A</th>
                    <th>Pais B</th>
                    <th>Pais C</th>
                    <th>Descripcion</th>
                    <th>Fecha de registro</th>
                    <th>Operacion</th>
				</tr>
			</thead>
            <?php
                $query="SELECT * FROM rdiplomaticas_2";
                $result_mercosur=mysqli_query($conn, $query);
                while($row=mysqli_fetch_array($result_mercosur)) { ?>
                    <tr>
                        <td> <?php echo $row['nombre'] ?> </td>
                        <td> <?php echo $row['paisA'] ?> </td>
                        <td> <?php echo $row['paisB'] ?> </td>
                        <td> <?php echo $row['paisC'] ?> </td>
                        <td> <?php echo $row['descripcion'] ?> </td>
                        <td> <?php echo $row['fecha_registro'] ?> </td>
                        <td>
                            <a class="editar" href="editar_2.php?id=<?php echo $row['id']?>">Editar</a><br><br>
                            <a class="eliminar" href="eliminar_2.php?id=<?php echo $row['id']?>">Eliminar</a>
                        </td>
                    </tr>
                
            <?php } ?>

		</table>
        <br>
	</div>
        
    </center>
</body>
</html>