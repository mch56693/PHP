<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <h1>Juego: Dos dados más altos</h1>

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
$dado3 = rand(1,6);
$dado4 = rand(1,6);

print "  <td>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n";
print "  </td>\n";
print "  <td>\n";
print "    <img src=\"img/$dado3.svg\" alt=\"$dado3\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado4.svg\" alt=\"$dado4\" width=\"140\" height=\"140\">\n";
print "  </td>\n";
print "  \n";

$total1 = $dado1 + $dado2;
$total2 = $dado3 + $dado4;


if ($dado1 == $dado2  && $dado3 == $dado4) {
  if ($dado1 > $dado3) {
    print "  <td>Ha ganado el jugador 1</td>\n";
  } else if ($dado1 < $dado3) {
    print "  <td>Ha ganado el jugador 1</td>\n";
  } else {
    print "  <p>Ha habido empate</p>";
  }
} else if ($dado1 == $dado2) {
    print "  <p>Ha ganado el jugador 1</p>\n";
} else if ($dado3 == $dado4) {
    print "  <p>Ha ganado el jugador 2</p>\n";
} else if ($total1 > $total2) {
    print "  <p>Ha ganado el jugador 1</p>\n";
} else if ($total1 < $total2) {
    print "  <p>Ha ganado el jugador 2</p>\n";
}

?>
    </tr>
  </table>

  <footer>
    <p>Álvaro</p>
  </footer>
</body>
</html>
