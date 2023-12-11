<?php
include("database.php");

//consulta sql con un solo user
//$sql = "SELECT * FROM users WHERE user = 'Candelario'";
//seleccionando todo
$sql = "SELECT * FROM users";

//guardando el resultado
$result = mysqli_query($conn, $sql);

//como no sabemos cuantas filas nos trae el resultado usamos la funcion mysqli_num_row();

if(mysqli_num_rows($result) > 0){//si es mayor que cero es porque al menos hay 1 registro
	//guardando en una variable
	while($row = mysqli_fetch_assoc($result)){
	//funcion que regresa la siguiente fila
	//como es un array asociativo podemos ver los valores mediante el indcie
	echo "<br>";
	echo $row['id']."<br>";
	echo $row['user']."<br>";
	echo $row['reg_date']."<br>";

}

}

?>