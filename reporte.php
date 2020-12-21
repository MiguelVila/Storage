<?PHP

include_once 'db1.php';
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;filename=Reporte.xls");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
		<div class="container" >
        <h3 class="center">RESERVAR REGISTRADAS</h3>
			<table >
                <thead>
                    
				    <th>Código Reserva</th>
				    <th>Código Área</th>
				    <th>Código usuario</th>
                    <th>Fecha</th>
                    <th>Hora Inicial</th>
                    <th>Hora Final</th>
                    <th>¿Usó Implementos?</th>
                    
                </thead>
                <tbody>
                <?php
                error_reporting(0);
				$sql="SELECT * FROM reserva";
                $ejecutar=$MySQLIConn->query($sql);
				while ($filas=$ejecutar->fetch_row()){
                    echo "<tr>
                    <td>$filas[0]</td>
                    <td>$filas[1]</td>
                    <td>$filas[2]</td>
                    <td>$filas[3]</td>
                    <td>$filas[4]</td>
                    <td>$filas[5]</td>
                    <td>$filas[6]</td>
                    </tr>";
                }		
                ?>
            </tbody>
            </table>
        </div>
        </body>
</html>
