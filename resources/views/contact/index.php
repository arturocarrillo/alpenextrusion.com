<!-- Mensajes de confirmación -->
<?php if (isset($_GET['status'])): ?>
<?php if ($_GET['status'] == 'success'): ?>
<div class="alert alert-success" role="alert">
  Mensaje enviado con éxito.
</div>
<?php else: ?>
<div class="alert alert-danger" role="alert">
  <?php 
                    switch ($_GET['message']) {
                        case 'captcha':
                            echo 'Por favor, verifica el reCAPTCHA.';
                            break;
                        case 'spam':
                            echo 'Mensaje bloqueado por contenido sospechoso.';
                            break;
                        case 'mailer':
                            echo 'Error al enviar el mensaje. Por favor, intente de nuevo más tarde.';
                            break;
                        case 'invalid_email':
                            echo 'Correo electrónico no válido.';
                            break;
                        case 'empty_fields':
                            echo 'Todos los campos son obligatorios.';
                            break;
                        default:
                            echo 'Error al enviar el mensaje. Por favor, intente de nuevo más tarde.';
                    }
                    ?>
</div>
<?php endif; ?>
<?php endif; ?>
<div class="bg-solid-blue">
  <div class="container p-2">
    <div class="row ml-auto mt-5 mr-auto mb-5">
      <?php include('./resources/views/contact/contact.php');?>
      <?php include('./resources/views/contact/form.php');?>
    </div>
  </div>
</div>
<?php include('./resources/views/contact/mapa.php');?>
