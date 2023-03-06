<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <h1>Tres dados</h1>

  <p>Actualice la página para mostrar una nueva tirada.</p>

<?php
$dado1 = rand(1,6);
$dado2 = rand(1,6);
$dado2 = rand(1,6);

print "  <p>\n";
print "    <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n";
print "    <img src=\"img/$dado3.svg\" alt=\"$dado3\" width=\"140\" height=\"140\">\n";
print "  <p>\n";
print "  \n";

if ($dado1 == $dado2) {
    print "  <p>Has sacado una pareja de $dado1.</p>\n";
} else {
    print "  <p>No has sacado una pareja. El valor más alto es " . max($dado1, $dado2) . ".</p>\n";
}
?>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
