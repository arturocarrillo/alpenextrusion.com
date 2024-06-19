<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = "6LeAPvkpAAAAAL7zsjF3oWInN9Kfl2ZW868O2yJr";
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo "Por favor, verifica el reCAPTCHA.";
    } else {
        $name = htmlspecialchars(trim($_POST['name']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));

        if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $spamKeywords = ["viagra", "porn", "pharmacy"];
                foreach ($spamKeywords as $keyword) {
                    if (stripos($message, $keyword) !== false) {
                        echo "Mensaje bloqueado por contenido sospechoso.";
                        exit;
                    }
                }

                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->isSMTP();                                            
                    $mail->Host       = 'mail.alpenextrusion.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'test@alpenextrusion.com';
                    $mail->Password   = 'tagpow-5xydpy-fAsbuf';                           
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
                    $mail->Port       = 587;                                    

                    //Recipients
                    $mail->setFrom($email, $name);
                    $mail->addAddress('test@alpenextrusion.com');     

                    // Content
                    $mail->isHTML(false);                                  
                    $mail->Subject = 'Nuevo mensaje de contacto';
                    $mail->Body    = "Nombre: $name\nTeléfono: $phone\nCorreo: $email\n\nMensaje:\n$message";

                    $mail->send();
                    echo 'Mensaje enviado con éxito.';
                } catch (Exception $e) {
                    echo "Error al enviar el mensaje. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                echo "Correo electrónico no válido.";
            }
        } else {
            echo "Todos los campos son obligatorios.";
        }
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
