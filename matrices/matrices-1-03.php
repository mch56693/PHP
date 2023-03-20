<?php
/**
 * Matrices (1) 3 - matrices-1-03.php
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
    Nombres de animales.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Nombres de animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
$dibujos = ["ballena.svg", "caballito-mar.svg", "camello.svg", "cebra.svg"];
$nombres = ["Ballena", "Caballito-mar", "Camello", "Cebra"];

$animal = rand(0, count($dibujos) - 1);
print "  <h2>$nombres[$animal]<h2>";
print "  <p><img src = \"img/animales/$dibujos[$animal]\"  alt=\"$nombres[$animal]\" height=\"250\"></p>\n";
?>

  <footer>
    <p>Álvaro Fernández Rodríguez</p>
  </footer>
</body>
</html>

