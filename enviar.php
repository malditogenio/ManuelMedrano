<!DOCTYPE html>
<html>
<head>
  <Title>Gracias :)</title> 
  <style type="text/css">
  h1{
  	text-align: center;
  	margin: 150px;
  	font-family: arial;
  	font-weight: lighter;

  }

  </style>
</head>
<body>
	<?php
	$nombre = $_POST['mce-FNAME'];
	$mail = $_POST['mce-EMAIL'];
	$telefono = $_POST['mce-PHONE'];

	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . ",
	 con telefono de contacto " . $telefono . " \r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = ' andres@treebox.co';
	$asunto = 'Lead de medrano';

	mail($para, $asunto, utf8_decode($mensaje), $header);

	?>

	<h1>Gracias por suscribirte<h1>

	<script language="JavaScript" type="text/javascript">

	var pagina="https://www.facebook.com/manuelmedranoband"
	function redireccionar() 
	{
	location.href=pagina
	} 
	setTimeout ("redireccionar()", 1000);

</script>
</body>

</html>