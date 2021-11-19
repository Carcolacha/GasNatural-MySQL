<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>¡Suscribete!</h1>
    	<input type="text" name="name" placeholder="Nombre">
    	<input type="text" name="apellido" placeholder="Apellido">
		<input type="email" name="email" placeholder="Email">
		<input type="text" name="telefono" placeholder="Telefono">
		<input type="text" name="rfc" placeholder="RFC">
    	<input type="submit" name="register">
    </form>

        <?php 
        include("empleado.php");
        ?>
</body>
</html>