<?php


header("refresh:10;url=index.html");

$name=$_POST['Nombre'];
$email=$_POST['Email'];

$servername="localhost";
$username="username";
$password="password";
$dbname="home";

//Crear conexión
$conn = new mysqli($servername,$username,$password,$dbname);

//Comprobar la conexión
if ($conn->connect_error){
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully. ";

$sql = "INSERT INTO people (name,email) VALUES ('$name','$email')";

if ($conn->query($sql) === TRUE) {
 echo ("Nueva entrada creada correctamente.");
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT name,email FROM home.people";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
 echo "<p>Lista de personas en la base de datos: </p>";
 // output data of each row
 while($row = $result->fetch_assoc()) {
  echo "<p> - Nombre: ".$row["name"]." - Email: ".$row["email"]."</p>";
 }
 echo "</table>";
} else {
 echo "0 results";
}

$conn->close();

echo ("Se le redireccionará de vuelta en 10 segundos");

?>
