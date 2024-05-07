<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registrar_visita";
    
    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $fecha = $_POST['fecha'];
    $telefono = $_POST['telefono'];
    $paquete = $_POST['paquete'];
    $cantidad = $_POST['cantidad'];
    $comentarios = $_POST['comentarios'];

    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO visitas_zoo (nombre, correo, edad, fecha, telefono, paquete, cantidad, comentarios)
            VALUES ('$nombre', '$correo', $edad, '$fecha', '$telefono', '$paquete', $cantidad, '$comentarios')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        // Redirigir a una página de éxito
        header("Location: registro_exitoso.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la inserción falla
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    // Si no se han enviado datos del formulario, redirigir a la página del formulario
    header("Location: form.php");
    exit();
}
?>
