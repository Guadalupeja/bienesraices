<?php  //  </article>

//importar la conexión
require 'includes/config/database.php';
$db = conectarDB();

//crear un email y password
$email = "correo@correo.com"; 
$password = "123456";

$passwordHash = password_hash($password, PASSWORD_BCRYPT); //dEFAULT O BCRYPT SON IGUAL DE BUENOS





//Query para crear al usuario
$query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}');";




//Agregarlo a la Base de Datos
mysqli_query($db, $query);

