<?php 

require_once "conexion.php";
 
	class ModeloFormularios{

		static public function mdlSolicitud($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, telefono, ciudad, cab_sel, fec_ini, fec_fin, transporte, mensaje) VALUES(:nombre, :email, :telefono, :ciudad, :cab_sel, :fec_ini, :fec_fin, :transporte, :mensaje)");
			$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
			$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
			$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
			$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
			$stmt->bindParam(":cab_sel", $datos["seleccion"], PDO::PARAM_STR);
			$stmt->bindParam(":fec_ini", $datos["fechaInicial"], PDO::PARAM_STR);
			$stmt->bindParam(":fec_fin", $datos["fechaFinal"], PDO::PARAM_STR);
			$stmt->bindParam(":transporte", $datos["transporte"], PDO::PARAM_STR);
			$stmt->bindParam(":mensaje", $datos["mensaje"], PDO::PARAM_STR);


			if ($stmt->execute()) {
				
				return "ok";

			}else{

				print_r(Conexion::conectar()->errorInfo());
			}

			$stmt->close();
			$stmt = null;

		}


		static public function mdlEnvioEmail($tabla, $datos){

			$nombre = $datos["nombre"];
			$email = $datos["email"];
			$telefono = $datos["telefono"];
			$ciudad = $datos["ciudad"];
			$seleccion = $datos["seleccion"];
			$fechaInicial = $datos["fechaInicial"];
			$fechaFinal = $datos["fechaFinal"];
			$transporte = $datos["transporte"];
			$mensaje = $datos["mensaje"];
			$asunto = "Solicitud";
			$destinatario = "";

			// Datos de la cuenta de correo utilizada para enviar vía SMTP
			$smtpHost = ""; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
			$smtpUsuario = ""; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
			$smtpClave = ""; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo

			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true;
			$mail->Port = 25; // Puerto de conexión al servidor de envio. 
			$mail->IsHTML(true); 
			$mail->CharSet = "utf-8";

			// VALORES A MODIFICAR //
			$mail->Host = $smtpHost; 
			$mail->Username = $smtpUsuario; 
			$mail->Password = $smtpClave;


			$mail->From = ""; // A RELLENAR Desde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
			$mail->FromName = $nombre;
			$mail->AddAddress($destinatario); // Esta es la dirección a donde enviamos los datos del formulario

			$mail->Subject = "Nueva solicitud de cabaña"; // Este es el titulo del email.
			$mail->Body = "
			<html> 
				<body> 
					<h2>Informacion de solicitud</h2>
					<div>
						<p>Nombre: {$nombre}</p>
						<p>Email: {$email}</p>
						<p>Telefono: {$telefono}</p>
						<p>Ciudad: {$ciudad}</p>
						<p>Cabaña: {$seleccion}</p>
						<p>Fecha de Inicio: {$fechaInicial}</p>
						<p>Fecha de Final: {$fechaFinal}</p>
						<p>Transporte: {$transporte}</p>
						<p>mensaje: {$mensaje}</p>
					</div>
				</body> 
			</html>
			<br />
			"; // Texto del email en formato HTML
			$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
			// FIN - VALORES A MODIFICAR //

			$mail->SMTPOptions = array(
			    'ssl' => array(
			        'verify_peer' => false,
			        'verify_peer_name' => false,
			        'allow_self_signed' => true
			    )
			);

			$estadoEnvio = $mail->Send(); 
			if($estadoEnvio){
			    return "Envio Exitoso!";
			} else {
			    return "Error de Envio!";
			}

		}

	}

?>
