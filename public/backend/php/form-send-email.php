<?php

        // Sanitize and validate input
        $name = htmlspecialchars(trim($_POST['name']));
        $phone = htmlspecialchars(trim($_POST['phone']));
        $email = htmlspecialchars(trim($_POST['email']));
        $message = htmlspecialchars(trim($_POST['message']));

$mail = new PHPMailer(true);

try {
    // Configuraciones del servidor
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'mail.alpenextrusion.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'test@alpenextrusion.com';
    $mail->Password   = 'tagpow-5xydpy-fAsbuf';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Destinatarios
    $mail->setFrom('test@alpenextrusion.com', 'Mailer');
    $mail->addAddress('hector.arturo.p.c@gmail.com', 'Hector');    

    // Contenido
    $mail->isHTML(true);
    $mail->Subject = 'Web script';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
?>
