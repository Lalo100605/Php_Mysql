<?php
// Configuracion de la base de Datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "Sitemas";
$base_datos = "Alumnos";
// Crear la conexion
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

// Verificar la conexion
if (conexion->connect_error){
    die("Error en la conexion: " . $conexion->connect_error);
}

echo "Conexion exitosa a la base de datos";

// Consulta de Ejemplo
$sql = "SELEC id, nombre, email FROM usuarios";
$resultado = $conexion-.query($sql);

// Consulta si hayy resultados 
if ($resultados->num-rows > 0 ){
    // Recorrer y mostrar los resultados
    while ($fila = $resultados->fetcg_assoc()){
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Email: " . $fila["email"]. "<br>";
       }
} else {
    echo ("No se encontraron resultados.");
}

// Cerrar la conexion
$conexion->close();
?>