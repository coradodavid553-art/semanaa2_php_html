<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="contenedor">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nombre = htmlspecialchars($_POST['nombre'] ?? '');
            $email  = htmlspecialchars($_POST['email'] ?? '');
            $mensaje = htmlspecialchars($_POST['mensaje'] ?? '');

            if (!empty($nombre) && !empty($email) && !empty($mensaje)) {
                
                echo "<h1>¡Mensaje Recibido!</h1>";
                echo "<p style='font-size: 1.2em; color: #2c3e50;'>";
                echo "¡Hola, <strong>" . $nombre . "</strong>! ";
                echo "Hemos recibido tu mensaje desde el correo <strong>" . $email . "</strong>.";
                echo "</p>";
                
                if (!empty($mensaje)) {
                    echo "<p><strong>Tu mensaje:</strong></p>";
                   echo "<p style='background-color: #f8f9fa; padding: 15px; border-radius: 8px;'>" . nl2br($mensaje) . "</p>";
                }
                
                echo "<br>";
                echo '<a href="index.html" style="color: #3498db; text-decoration: none; font-weight: 600;">← Volver al formulario</a>';
                
            } else {
                echo "<h1>Error</h1>";
                echo "<p>Por favor, completa todos los campos obligatorios.</p>";
                echo '<a href="index.html">Volver al formulario</a>';
            }
            
        } else {
            echo "<h1>Acceso no permitido</h1>";
            echo "<p>Este archivo solo puede ser accedido desde el formulario.</p>";
        }
        ?>
    </div>

</body>
</html>