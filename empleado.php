<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['rfc']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$telefono = trim($_POST['telefono']);
		$apellido = trim($_POST['apellido']);
		$rfc = trim($_POST['rfc']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO empleado(Nombre, Apellido, Email, Telefono, RFC) VALUES ('$name','$apellido','$email','$telefono','$rfc')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>