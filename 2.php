<?php
$conexion = mysqli_connect("localhost","root","123456789","cecytemm") or
die("prpblemas con la conexion");

$registros = mysqli_query($conexion, "select id_control,nombre_completo,correo,usuario,password
                    from usuario") or 
die("problemas en el select:" . mysqli_error ($conexion));

while ($reg = mysqli_fetch_array($registros)){
	echo "id" . $reg['id'] . "<br>";
	echo "nombre_completo: " . $reg['nombre_completo'] . "<br>";
	echo "correo: ". $reg['correo'] . "<br>";
	echo "usuario: ". $reg['usuario'] . "<br>";
    echo "password: ". $reg['password'] . "<br>";
	echo "<br>";
	echo "<br>";
}

mysqli_close($conexion);
?>
</body>