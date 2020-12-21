<?PHP
include 'db.php';
include 'db1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TECSUP</title>
    <LINK REL=StyleSheet HREF="login.css">
    
    
</head>

<body >
    <section>
   
    </section>
    <div class="login-page">
    <div class="form">
    <section>
    <form method="post">
        
        <h2 align="center">Áreas deportivas - TECSUP</h2>
          <table>
            <tr>
                <td> Codigo Usuario</td>
                <td><input type="text" name="codigou"/></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="password"/></td>
            </tr>
                <td></td>
                <td>
                <input class= "btn" type="submit" value="acceder" name="acceder"/>
                </td>
         </table>
        </form>
    </section>
    </div>
    </div>
            <?php 
            if (isset($_POST['acceder'])){
            $codigou= $_POST['codigou'];
            $password= $_POST['password'];
            $session= true;
			$query= "SELECT * FROM usuario WHERE codigou ='".$codigou."' AND contrasena = '".$password."' AND cargo = '".administrador."'" ;
            $sin= "SELECT * FROM usuario WHERE codigou ='".$codigou."' AND contrasena = '".$password."'";
            $q=mysql_query($query,$con);
            $ad=mysql_query($sin,$con);
            try{
                if (mysql_result($q,0)) 
                {$result= mysql_result($q,0);
                    header("Location:administrador.php");
                } elseif (mysql_result($ad,0)) 
                {$result= mysql_result($ad,0);
                    header("Location:usuario.php");
                } else 
                    echo "<h2 style=\"color: #FF0000\">Código o Contraseña incorrectos</h2>";
                }catch(Exception $error){}
                    mysql_close($con);
                }
			?>
    </body>
</html>
