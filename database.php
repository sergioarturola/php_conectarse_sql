<?php
//damos los datos

$db_server = "localhost";
$db_user = "root";
$db_pass = "1234";
$db_name = "phpcurso";
$conn = "";


//usando la funcion msqli_connect()

try{
	$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
}
catch(mysqli_sql_exception){
	
	echo "Hubo un error en la conexion";

}


if($conn){
	echo "Conectado exitosamente <br>";
}
else{
	echo "Hubo un error <br>";
}

?>