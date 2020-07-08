<?php 

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());
ini_set('date.timezone', 'America/Bogota');
if ($_POST) {
	# code...
  $clientId      = $_POST['clientId']; //  Identificacion del cliente
	$NameClient    = $_POST['clientName']; //Nombre del cliente
	$AddresClient  = $_POST['clientAddres']; // Direccion donde reside el cliente
	$EmailClient   = $_POST['clientEmail']; // Correo del cliente
	$TelClient     = $_POST['clientTelefono']; // Telefono de contacto del cliente
	$CatClient	   = $_POST['ClientStatus']; // Categoria del cliente segun el nivel de compra
	$comentario	   = $_POST['clientComentario']; // Descripcion adicional sobre el cliente

	$fecha = date('d/m/Y');
				//status del cliente, 1 = Activo 2 = Inactivo
				$sql = "INSERT INTO client (id_client,nombre_cte, direccion, email, telefono, categoria, status, comentario, fecha_add) 
				VALUES ('$clientId','$NameClient', '$AddresClient', '$EmailClient', '$TelClient', '$CatClient', 1, '$comentario', '$fecha')";

				if($connect->query($sql) === TRUE) {
					$valid['success'] = true;
					$valid['messages'] = "Creado exitosamente";	
				} else {
					$valid['success'] = false;
					$valid['messages'] = "Error no se ha podido guardar";
				}
		

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST



?>