<?PHP
include_once 'CRUD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambios en la BD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <LINK REL=StyleSheet HREF="estilos.css">
	
</head>
<body background="img/login.jpg">
<center>
		<h1>Mantenimiento</h1>
        <br/>
        <td>
			<a href="reporte.php" class="btn">Reporte</a>
			<a href="index.html" class="btn">Volver al inicio</a>
			</td>
        <div>
		<div id="form2">
        <table >
				<?php
				$res=$MySQLIConn->query("SELECT * FROM area");
				echo "<h4 class='center'>Áreas </h4>
                <table>
				<thead>
                <th>Codigo Área</th>
                <th>Tipo de Deporte</th>
                <th>Número</th>
                </thead>
                <tbody>
                <tr>";
				while ($row=$res->fetch_array()){
					?>
					<tr>
						<td><?php echo $row['codigoa'];?></td>
						<td><?php echo $row['tipo'];?></td>
						<td><?php echo $row['numero'];?></td>
						
						
					</tr>
					<?php
					}
					?>
			</table>
			<br/>
			<br/>
		</div>
		<div>
        <table>
				<?php
				$res=$MySQLIConn->query("SELECT * FROM reserva");
				echo "<h4 class='center'>Reservas registradas</h4>
                <table>
                <thead>
                <th>Código reserva</th>
				<th>Código Área</th>
				<th>Código Usuario</th>
                <th>Fecha</th>
                <th>Hora Inicial</th>
                <th>Hora Final</th>
                <th>Implemento</th>
                </thead>
                <tbody>
                <tr>";
				while ($row=$res->fetch_array()){
					?>
					<tr>
                        <td><?php echo $row['codigor'];?></td>
						<td><?php echo $row['codigoa'];?></td>
						<td><?php echo $row['codigou'];?></td>
                        <td><?php echo $row['fecha'];?></td>
                        <td><?php echo $row['horai'];?></td>
                        <td><?php echo $row['horaf'];?></td>
                        <td><?php $boo=$row['implemento']; if ($boo == "1" ){ echo "SI"; } else {echo "NO";}?></td>
						
						<td><a href="?del=<?php echo $row['codigor']; ?>" >ELIMINAR</a></td>
					</tr>
					<?php
					}
					?>
			</table>
			<br/>
			<br/>
		</div>
</body>
</html>