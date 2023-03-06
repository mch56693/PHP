<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <h1>Juego: Dado más alto</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

  <table>
    <tr>
      <th>Jugador 1</th>
      <th>Jugador 2</th>
      <th>Resultado</th>
    </tr>
    <tr>
<?php

$dado1 = rand(1,6);
$dado2 = rand(1,6);

print "  <td>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print "  </td>\n";
print "  <td>\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n";
print "  </td>\n";
print "  \n";

if ($dado1 > $dado2) {
    print "  <p>Ha ganado el jugador 1</p>\n";
} else if ($dado1 < $dado2) {
    print "  <p>Ha ganado el jugador 2</p>\n";
} else {
    print "  <p>Ha habido empate</p>";
}

?>
    </tr>
  </table>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
