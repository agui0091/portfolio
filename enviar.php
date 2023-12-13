

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Configurar el destinatario del correo
    $to = "angelaaguirre2008@gmail.com";
    $subject = "New message";

    // Construir el cuerpo del correo
    $message_body = "Nombre: $name\n";
    $message_body .= "Correo electrónico: $email\n";
    $message_body .= "Teléfono: $phone\n\n";
    $message_body .= "Mensaje:\n$message";

    // Enviar el correo
    mail($to, $subject, $message_body);

    // Puedes redirigir al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>


