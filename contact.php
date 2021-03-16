<? php 
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$header ='From: Abisaid <abisaidgc@ufps.edu.co>' . "\r\n" .
'Reply-To: abisaidgc@ufps.edu.co ' . "\r\n" .
'Content-Type: text/plain; charset=utf-8' . "\r\n" . 
'X-Mailer: PHP/' . phpversion();

mail($correo,$asunto,$mensaje,$header);
header(index.html);
?>
