<head>
	<title>formulario de registro</title>
</head>

<body>
	<?php
	$conexion=mysqli_connect("localhost" , "root" , "123456789","cecytemm") or
	die("problemas con la conexion");

	mysqli_query($conexion, "insert into  usuario(nombre_completo,correo,usuario,password) values
		('$_REQUEST[nombre_completo]','$_REQUEST[correo]','$_REQUEST[usuario]','$_REQUEST[password]')")
	or die("problema en el select" . mysqli_error($conexion));

	mysqli_close($conexion);
	echo "el alumno fue dado de alta";
	?>
   
    
    <button onclick="location.href='index11.html'">Llévame a otro lado</button>
    
</body>
</html>