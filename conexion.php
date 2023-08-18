<?php

//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "localhost";
$database_db = "planillas";
$username_db = "root";
$password_db = "";
//Conectar a la base de datos
$conexion = new mysqli ($hostname_db, $username_db, $password_db,$database_db);

if($conexion->connect_errno){
    echo "No conectado";
}else{  
    echo "Conectado";
}
$query = 'SELECT id_club, nombre, num_fecha, partido_ganado, partido_empatado, partido_perdido,puntos FROM clubes
ORDER BY puntos DESC';

$result = mysqli_query($conexion,$query);

?>

<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID</th>
			<th>NOMBRE</th>
			<th>num_fecha</th>
			<th>partido_ganado</th>
			<th>partido_empatado</th>
			<th>partido_perdido</th>
            <th>puntos</th>
		</tr>
		</thead>
<?php while ($row = mysqli_fetch_array($result)) { ?>
    <tr>
	<td><?php echo $row['id_club'] ?></td>
    <td><?php echo $row['nombre'] ?></td>
    <td><?php echo $row['num_fecha'] ?></td>
    <td><?php echo $row['partido_ganado'] ?></td>
    <td><?php echo $row['partido_empatado'] ?></td>
    <td><?php echo $row['partido_perdido'] ?></td>
    <td><?php echo $row['puntos'] ?></td>
</tr>
<?php } ?>
</table>