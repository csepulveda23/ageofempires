<?php
// Se graba una cookie con una validez de 24 horas.
setcookie("idiomaUsuario",$_GET['idiomaUsuario'],time()+86400);
?>

<html>
    <head>
    <script language= "javascript" type="text/javascript">
        //Se regresa a la pagina principal.
        location.href = "index.php";
        </script>
    </head>
<html>
