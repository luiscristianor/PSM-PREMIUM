<?php
$field_name = $_POST['name'];
$field_name = $_POST['name2'];
$field_email = $_POST['email'];
$field_name = $_POST['subject'];
$field_message = $_POST['message'];

$mail_to = 'luiscristianor@hotmail.com';
$subject = 'Mensage desde la Pagina Web '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Gracias por su mensaje. Nosotros nos contactaremos en la brevedad.');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Mensaje fallido. Por favor, Enviar un correo al Administrador de Sistemas soporte@psmpremium.com');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>