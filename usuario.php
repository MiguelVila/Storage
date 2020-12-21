<?PHP
include_once 'CRUD.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RESERVA - TECSUP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <LINK REL=StyleSheet HREF="estilos.css">
</head>
<body>
<center>
		<h1>Reservas</h1>
		<br/>
		<div id="form1">
			<form method="POST">
				<table width="50%" border="2" cellpadding="15"> 
					
					
					<tr>
						<td>Ingresar el Área</td>
						<td>
						<select name='area' class="btn">
                    <?php
						$resa=$MySQLIConn->query("SELECT codigoa FROM area");
						
                        while($fill=$resa->fetch_array()){	
							?>
							<?php echo $fi1=$fill['codigoa'];?>
						
							<?php
							if($fi1=="1"){
								$fi2="Futbol N°1";
							}elseif($fi1=="2"){
								$fi2="Futbol N°2";
							}elseif($fi1=="3"){
								$fi2="Voleibol - Basquet";
							}elseif($fi1=="4"){
								$fi2="fronton";
							}elseif($fi1=="5"){
								$fi2="Pinpon N°1";
							}elseif($fi1=="6"){
								$fi2="Pinpon N°2";
							}elseif($fi1=="7"){
								$fi2="Pinpon N°3";
							}elseif($fi1=="8"){
								$fi2="Pinpon N°4";
							}else{
								$fi2="Nueva Área";
							}echo "<option value='$fi1'>$fi2</option>";
                        }
                    ?>
                    </select>
						</td>
                    </tr>
                    <tr>
					<td>Ingresar Código de Usuario</td>
						<td>
						<select name='usuario' class="btn">
                    <?php
                        
						
						$res=$MySQLIConn->query("SELECT codigou FROM usuario");
                        
                        while($filas=$res->fetch_array()){
							?>
							<a><?php echo $fi1=$filas['codigou'];?></a>
							<?php
                            echo "<option value='$fi1'>$fi1</option>";
                            
                        }
                    ?>
                    </select>
						</td>
					</tr>
					<tr>
						<td>Ingresar la Fecha</td>
						<td><input type="date" name="fecha"></td>
					</tr>
					<tr>
						<td>Hora Inicial</td>
						<td><input type="time" name="horai"></td>
					</tr>
					<tr>
						<td>Hora Final</td>
						<td><input type="time" name="horaf"></td>
					</tr>
					<tr>
						<td>¿Desea implementos?</td>
						<td><select name="implemento" class="btn">
						<option value='1'>SI</option>
						<option value='0'>NO</option>
						</select></td>
					</tr>
                    <tr>
						<td></td>
						<td>
							<button type="sumbit" name="save" class="btn" >Guardar</button>
							<a href="index.html" class="btn">Volver al inicio</a>
						</td>
					</tr>
				</table>
			</form>
			<br/>
			<br/>
			<table width="100%" border="1" cellpadding="15" align="center">
				<?php
				$res=$MySQLIConn->query("SELECT * FROM reserva");
				echo "<h4 class='center'>Reservas registradas</h4>
                <table>
                <thead>
				
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
		</div>
		
        </body>
</html>