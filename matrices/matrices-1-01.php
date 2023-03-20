<?php
/**
 * Matrices (1) 1 - matrices-1-01.php
 *
 * @author Álvaro
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Dado.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Dado</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>
<?php

$dado = rand (1,6);

$nombre = ["", "uno", "dos", "tres", "cuatro", "cinco", "seis"];

print " <p><img src = \"img/$dado.svg\" alt=\"$dado\" width=\"140\" height=\"140\"></p>\n"; 
print " \n";
print " <p>Ha sacado un <b>$nombre[$dado]</b>.</p>\n";

?>

  <footer>
    <p>Álvaro Fernández Rodríguez</p>
  </footer>
</body>
</html>
