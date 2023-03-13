<?php
/**
 * Matrices (1) 2 - matrices-1-02.php
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Animales.
    Matrices (1). Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Animales</h1>

  <p>Actualice la página para mostrar un nuevo animal.</p>

<?php
$animal = rand(0, count($dibujos) - 1);
$dibujos = ["ballena.svg", "caballito-mar.svg", "camello.svg", "cebra.svg"];
$nombres = ["ballena", "caballito-mar", "camello", "cebra"];


print "  <p><img src = \"img/animales/$dibujos[$animal]\"  alt=\"$nombres[$animal]\" height=\"250\"></p>\n">;

?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
