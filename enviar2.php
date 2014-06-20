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
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];

	$header = 'From: ' . 'Suscriptor completo ' $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Nombre: " . $nombre . <br/>",
	 Teléfono: " . $telefono . <br/>" \r\n";
	$mensaje .= "Email: " . $mail . " \r\n";
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


<!-- Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-51547003-1', 'manuelmedrano.com');
	  ga('require', 'displayfeatures');
	  ga('send', 'pageview');

	  setTimeout('_gaq.push([\'_trackEvent\', \'NoBounce\', \'Over 30 seconds\'])',30000);

	</script>

<!-- Remarketing -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1016618282;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1016618282/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


</body>

</html>