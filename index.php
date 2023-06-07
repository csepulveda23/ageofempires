<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
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
  <nav>
    <ul class="menu">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="aoe1.html">AOE1</a></li>
      <li><a href="aoe2.html">AOE2</a></li>
      <li><a href="aoe3.html">AOE3</a></li>
      <li><a href="aoe4.html">AOE4</a></li>
      <li><a href="contacto.html">Contacto</a></li>
      <li><?php echo "Has iniciado sesion como ".$_SESSION['usuario']?></li>
      <li><a href="logout.php">Cerrar sesión</a></li>
    </ul>
  </nav>
  <h1 class="welcome">Bienvenido a Age of Empires</h1>


  <div class="image-slider">
  <div class="image-container">
    <img src="img/wallpaper1.jpg" alt="Imagen 1">
    <img src="img/wallpaper4.jpg" alt="Imagen 4">
    <img src="img/wallpaper2.jpg" alt="Imagen 2">
    <img src="img/wallpaper5.png" alt="Imagen 5">
    <img src="img/wallpaper3.jpg" alt="Imagen 3">
    <img src="img/wallpaper6.jpg" alt="Imagen 6">
    <img src="img/wallpaper4.jpg" alt="Imagen 4">
    <img src="img/wallpaper2.jpg" alt="Imagen 2">
    <img src="img/wallpaper1.jpg" alt="Imagen 1">
  </div>
</div>


  <p>Age of Empires es una serie de juegos de estrategia en tiempo real (RTS) que te permite construir y desarrollar una civilización a lo largo de diferentes épocas de la historia.</p>
  <h2>Juegos principales</h2>
<div>
  <section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(img/aoe1.jpg)"></div>
      <div class="card__content">
        <p class="card__category"></p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(img/aoe2.jpg)"></div>
      <div class="card__content">
        <p class="card__category"></p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(img/aoe3.jpg)"></div>
      <div class="card__content">
        <p class="card__category"></p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(img/aoe4.jpeg)"></div>
      <div class="card__content">
        <p class="card__category"></p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(img/aom.jpeg)"></div>
      <div class="card__content">
        <p class="card__category"></p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
  <div>
</section>
</div>



  <h2>Popularidad</h2>
  <p>La franquicia de Age of Empires ha sido muy popular desde su lanzamiento inicial en 1997.<br> Ha ganado una gran base de fanáticos y ha sido reconocida por su jugabilidad estratégica y su enfoque histórico.</p>
  <h2>Civilizaciones</h2>
  <p>Cada juego de Age of Empires presenta una variedad de civilizaciones jugables con características únicas, incluyendo unidades especiales, tecnologías y bonificaciones. Algunas de las civilizaciones destacadas incluyen:</p>
<ul class="centered-list">
  <li>Egipcios</li>
  <li>Griegos</li>
  <li>Británicos</li>
  <li>Chinos</li>
  <li>Aztecas</li>
  <li>Japoneses</li>
  <li>Entre muchas otras...</li>
</ul>
  <footer class="small-footer">
    <p>&copy; 2023 - Creado por Simón y Claudio</p>
  </footer>
</body>
</html>
