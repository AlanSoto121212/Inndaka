<?php
// Reemplaza con tus credenciales de base de datos
$servername = "localhost";
    $username = "u221169986_arsol";
  	$password = "Ar$0l.2030";
  	$dbname = "u221169986_inndaka";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

// Obtiene el ID de la firma de la URL
$firmaId = $_GET["id"];

// Consulta para obtener la firma desde la base de datos
$sql = "SELECT firmaOperador FROM firmas WHERE id = $firmaId";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Devuelve la firma en formato JSON (puedes ajustar esto según tus necesidades)
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo "Firma no encontrada";
}

$conn->close();
?>
