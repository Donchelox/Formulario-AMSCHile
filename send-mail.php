<?php
	$mail_to = 'marcealevasquez@gmail.com'; // specify your email here

	// Assigning data from $_POST array to variables
	$name = $_POST['sender_name'];
	$mail_from = $_POST['sender_email'];
	$phone = $_POST['sender_phone'];
	$phone = $_POST['company'];
	$host_period = $_POST['country'];
	
	// Construct subject of the email
	$subject = 'Cotización desde la web AMSChile ' . $name;

	// Construct email body
	$body_message = 'From: ' . $name . "\r\n";
	$body_message .= 'E-mail: ' . $mail_from . "\r\n";
	$body_message .= 'Phone: ' . $phone . "\r\n";
	$body_message .= 'country: ' . $message;
	
	$body_message .= 'User selected ' . $host_plan . ' hosting plan' . "\r\n";
	$body_message .= 'Additional options selected: ' . $additional_options . "\r\n";
	$body_message .= 'Hosting period: ' . $host_period . "\r\n";

	// Construct headers of the message
	$headers = 'From: ' . $mail_from . "\r\n";
	$headers .= 'Reply-To: ' . $mail_from . "\r\n";

	$mail_sent = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>
		<script language="javascript" type="text/javascript">
		alert('Gracias por el mensaje. Nos pondremos en contacto a la brevedad.');
		window.location = 'index.html';
		</script>
	<?php } else { ?>
    <script language="javascript" type="text/javascript">
        alert('Mensaje no enviado. Porfavor notifique a marcelo@donchelox.tk');
        window.location = 'index.html';
    </script>
	<?php
	}
?>