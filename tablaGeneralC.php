
<?php

//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "localhost";
$database_db = "planillas";
$username_db = "root";
$password_db = "";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);
//Seleccionar la base de datos
mysqli_select_db($conexion,$database_db) or die ("Ninguna DB seleccionada");
var_dump($conexion);
?>
<?php





//CONSULTA A LA BASE DE DATOS




$query = 'SELECT id_club, nombre, num_fecha, partido_ganado, partido_empatado, partido_perdido,puntos FROM clubes';

$result = mysqli_query($conexion,$query);
var_dump($result);

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>APELLIDO</th>
			<th>TELEFONO</th>
			<th>ESTADIA</th>
			<th>HABITACION</th>
            <th>HABITACION</th>
		</tr>
		</thead>
<?php while ($row = mysqli_fetch_array($result)) { ?>
	<td><?php $row['id_club'] ?></td>
    <td><?php $row['nombre'] ?></td>
    <td><?php $row['num_fecha'] ?></td>
    <td><?php $row['partido_ganado'] ?></td>
    <td><?php $row['partido_empatado'] ?></td>
    <td><?php $row['partido_perdido'] ?></td>
    <td><?php $row['puntos'] ?></td>
	
<?php } ?>
</table>
</body>
