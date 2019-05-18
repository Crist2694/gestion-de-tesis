<?php
	require("conexion.php");


	$nombre = $_POST['nombre'];
	$matricula = $_REQUEST['matricula'];
	$passwd = $_POST['passwd'];
	$email=$_POST['email'];
	$telefono = $_POST['telefono'];
	
	
	
	$query="DELETE FROM alumno where matricula= '$matricula'" ;

	$resultado=$mysqli->query($query);
	echo $matricula;

?>

<html>
	<head>
		<title>Modificar Paciente</title>
		<meta charset="UTF-8"> 
	</head>
	<body>
		<center>
			<?php
			if($resultado>0){
			header("Location:formalum.php");
			 } else { 
			echo "Error";
			 }?>	
		</center>
	</body>
</html>
