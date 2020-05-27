<?php
include ("conexion.php");
$con=conectar();
?>
< !DOCTYPE html>
<html>
	<head><title>Usuarios</title></head>
	<body>
		<br>
		<table>
		<tr>
			<td>Id</td>
			<td>Usuario</td>
			<td>Contraseña</td>
		</tr>
		<?php
		$sql="SELECT * from usuarios";
		$result =mysqli_query($conect, $sql);
		?>
		While($leer=mysqli_fetch_array($result))
		{
			if($leer=)
			{
			
			}
		}
	</body>
</html>

