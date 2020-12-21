<?PHP
include_once 'CRUD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <LINK REL=StyleSheet HREF="estilos.css">
</head>
<body>
        <br/>
        <td>
			<a href="index.html" class="btn">Volver al inicio</a>
			</td>
        <div>
		<div id="form2">
        <table >
				<?php
				$res=$MySQLIConn->query("SELECT * FROM reserva ORDER BY codigor DESC LIMIT 1");
				echo "<h2 class='center'>Detalles de tu reserva </h2>
                <table>
                <thead>
                
                <th>Código Reserva</th>
                <th>Código de Área</th>
                <th>Código de usuario</th>
                <th>Fecha</th>
                <th>Horai</th>
                <th>Horaf</th>
                <th>Implementos</th>
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