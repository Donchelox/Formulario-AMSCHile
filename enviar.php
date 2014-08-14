<?php
	$mail_to = 'marcealevasquez@gmail.com'; // specify your email here

	// Assigning data from $_POST array to variables
	$name = $_POST['sender_name'];
	$mail_from = $_POST['sender_email'];
	$phone = $_POST['sender_phone'];
	$company = $_POST['company'];
	$country = $_POST['country'];

	$servicio = $_POST['servicio'];
	$transporte = $_POST['transporte'];
	$origen = $_POST['origen'];
	$destino = $_POST['destino'];
	$start_date = $_POST['start_date'];
	$end_date = $_POST['end_date'];

	$quantity = $_POST['quantity'];
	$total_weight = $_POST['total_weight'];
	$dimension = $_POST['dimension'];
	$declared_value = $_POST['declared_value'];
	
	// Construct subject of the email
	$subject = 'Cotización desde la web AMSChile ' . $name;

	// Construct email body

	$body_message = 'Nombre: ' . $name . "\r\n";
	$body_message .= 'E-mail: ' . $mail_from . "\r\n";
	$body_message .= 'Teléfono: ' . $phone . "\r\n";		
	$body_message .= 'Compañia: ' . $company . "\r\n";
	$body_message .= 'País: ' . $country . "\r\n" . "\r\n";

	$body_message .= 'Servicio: ' . $servicio . "\r\n";
	$body_message .= 'Transporte: ' . $transporte . "\r\n";
	$body_message .= 'Origen: ' . $origen . "\r\n";
	$body_message .= 'Destino: ' . $destino . "\r\n";
	$body_message .= 'Fecha de inicio del servicio: ' . $start_date . "\r\n";
	$body_message .= 'Fecha de termino del servicio: ' . $end_date . "\r\n" . "\r\n";

	$body_message .= 'Numero de piezas: ' . $quantity . "\r\n";
	$body_message .= 'Peso total: ' . $total_weight . "\r\n";
	$body_message .= 'Dimensión: ' . $dimension . "\r\n";
	$body_message .= 'Valor declarado (US$): ' . $declared_value . "\r\n";



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