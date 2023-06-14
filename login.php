<?php
session_start();

// Verificar si el formulario de inicio de sesión ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Verificar las credenciales (puedes reemplazar esta lógica con tu propia validación)
    if ($usuario === 'test' && $clave === 'test') {
        // Inicio de sesión exitoso, guardar información en la sesión
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        exit();
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        $mensajeError = 'Usuario o contraseña incorrectos';
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Age of Empires</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>


<body>
<header>
  <div class="header_logo">
	    	<a class="header__logo__link" href="https://www.ageofempires.com">
				<img src="https://www.ageofempires.com/wp-content/themes/ageOfEmpires/dist/images/logos/franchise-logo-horiz.webp" alt="Age of Empires" width="365" height="44">
			</a>
		</div>
  </header>
  
    <h1>Iniciar sesión</h1>
    <?php if (isset($mensajeError)) : ?>
        <p><?php echo $mensajeError; ?></p>
    <?php endif; ?>

<td rowspan="2">
    <form name="login" method="POST" action="">
    <table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td>Usuario:</td>
                <td><input type="text" id="usuario" name="usuario" required></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" id="clave" name="clave" required></td>
            </tr>
            <tr>
                <tr align="center">
                    <td colspan="2"><input name="enviar" type="submit" id="enviar" value="Enviar"></td>
                </td>
            </tr>
        </table>
    </form>
</td>

</body>
</html>
