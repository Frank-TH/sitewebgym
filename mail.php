<?php
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"]; 

$body = "Nombre: ".$nombre."<br/>Correo: ".$correo."<br/>Telefono: ".$telefono."<br/>Mensaje :".$mensaje;



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
   
    $mail->Username   = 'imaginas.98@gmail.com';                     // SMTP username
    $mail->Password   = '$imaginas1998$';                               // SMTP password
    $mail->SMTPSecure = 'tls';         //PHPMailer::ENCRYPTION_STARTTLS - Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($correo,$nombre);
    $mail->addAddress('torrejon.huarcaya@gmail.com', 'Administrador');     // Add a recipient
    /* $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

    /* // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 */
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Asunto: Correo de prueba';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    /* $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; */
    $mail->send();
    echo '
    <script>
    alert("El Mensaje se envio correctamente")
    window.history.go(-1)
    </script>';
} catch (Exception $e) {
    echo "Hubo Error al eviar el mensaje: <br/> {$mail->ErrorInfo}";
}