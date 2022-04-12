<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Documento sin título</title>
</head>

<body>
<h2>Gracias. Su formulario se envio correctamente</h2>
<?

@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$web = addslashes($_POST['web']);
@$mensaje = addslashes($_POST['mensaje']);
@$tel= addslashes($_POST['tel']);

$cabeceras= "From:$email\n" //la persona que envia el correo
."Reply-To: $email\n";
$asunto="Mensaje desde la Pagina Web";
$email_to = "andreagi96@hotmail.com";
$contenido="$nombre ha enviado un mensaje desde la web "
."\n"
."Nombre:$nombre\n"
."Email:$email\n"
."Sitio Web:$web\n"
."Telefono:$tel\n"
."Mensaje:$mensaje\n"
."\n";

//Envio y comprobacion de mensaje

if(@mail($email_to,$asunto,$contenido,$cabeceras)){
	
die("Gracias,su mensaje se envio correctamente");	
	
	}else{
		
//Si el mensaje no se envia muestra el mensaje de error

die("Error:Su información no pudo ser enviada , intente más tarde");			
		
		
		}

?>

</body>
</html>