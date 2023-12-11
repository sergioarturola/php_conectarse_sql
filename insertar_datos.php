<?php
//para podernos conectar a la base de datos debemos traer el archivo de la conexion con include()

include("database.php");

//ahora vamos a insertar unos valores desde php

$username = "Candelario";
$password = "1234bv";
//hasheando la constraseña
$hash_pass = password_hash($password, PASSWORD_DEFAULT);

//ahora realizamos la consulta SQL

$sql = "INSERT INTO users(user, password)
        VALUES('$username', '$hash_pass')";

 //realizamos la consulta envolviendolo en un try-catch

        try{
        	mysqli_query($conn, $sql);//le pasamos el objeto conexion y la consulta a ejecutarse
        	echo "<br> Usuario registrado";
        }
        catch(mysqli_sql_exception){
        	echo "NO se pudo registrar";
        }

     //al final se cierra la conexion

      mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Probando la conexion e insertando datos</p>

</body>
</html>