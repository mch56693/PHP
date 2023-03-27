<?php
function recoge($var, $m = "")
{
    $tmp = is_array($m) ? [] : "";
    if (isset($_REQUEST[$var])) {
        if (!is_array($_REQUEST[$var]) && !is_array($m)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$var]));
        } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
            $tmp = $_REQUEST[$var];
            array_walk_recursive($tmp, function (&$valor) {
                $valor = trim(htmlspecialchars($valor));
            });
        }
    }
    return $tmp;
}

$nombre      = recoge("nombre");
$apellidos   = recoge("apellidos");
$email       = recoge("email");
$pswrd       = recoge("pswrd");
$razon       = recoge("razon");
$centro      = recoge("centro");
$otro        = recoge("otro");
$info        = recoge("info");

$nombreOk      = false;
$apellidosOk   = false;
$emailOk       = false;
$pswrdOk       = false;
$razonOk       = false;
$centroOk      = false;
$otroOk        = false;
$infoOk        = false;

print "\t    <h1>Se esta procesando su cita $nombre</h1>";

if ($nombre == "") {
    print "  <p class=\"aviso\">No ha escrito su nombre.</p>\n";
    print "\n";
} else {
    print "\t  <p><strong>Nombre:</strong> $nombre.</p>";
}

if ($apellidos == "") {
    print "  <p class=\"aviso\">No ha escrito sus apellidos.</p>\n";
    print "\n";
} else {
    print "\t  <p><strong>Apellidos:</strong> $apellidos.</p>\n";
    print "\n";
}

if ($email == "") {
    print "  <p class=\"aviso\">No ha escrito su direccion de correo.</p>\n";
    print "\n";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "  <p class=\"aviso\">No ha escrito una direccion de correo correcta.</p>\n";
    print "\n";
} else {
    print "\t  <p><strong>Email:</strong> $email.</p>\n";
    print "\n";
}

if ($pswrd == "") {
    print "  <p class=\"aviso\">No ha escrito su <strong>password</strong>.</p>\n";
    print "\n";
} else {
    print "  <p><strong>Password:</strong> Aceptada y registrada.</p>\n";
    print "\n";
}

if ($razon == "-1") {
    print "  <p class=\"aviso\">No ha indicado el motivo de su cita.</p>\n";
    print "\n";
} elseif ($razon != "administrativa" && $razon != "particular" && $razon != "otro") {
    print "  <p class=\"aviso\">Por favor, indique si la razon de su visita es administrativa, informativa u otro.</p>\n";
    print "\n";
} elseif ($razon == "administrativa"){
    print "  <p>La razon de su cita es <strong>informativa</strong>.</p>\n";
    print "\n";
} elseif ($razon == "informativa"){
    print "  <p>La razon de su cita es <strong>informativa</strong>.</p>\n";
    print "\n";
} else {
    print "  <p>La razon de su cita es <strong>otra</strong>.</p>\n";
    print "\n";
}


if ($centro == "-1") {
    print "  <p class=\"aviso\">Se le asignara un centro cualquiera.</p>\n";
    print "\n";
} elseif ($centro != "que este disponible" && $centro != "Zona Centro" && $centro != "Moreda" && $centro != "Gijon Sur"  && $centro != "Llano"  && $centro != "Barrio La Arena"  && $centro != "Viesques") {
    print "  <p class=\"aviso\">Por favor, indique el centro al que desea acudir.</p>\n";
    print "\n";
} else {
    print "  <p>Se priorizara concertar una cita en el centro <strong>$centro</strong></p>\n";
    print "\n";
}

if ($otro == "") {
    print "  <p class=\"aviso\">No ha especificado el motivo de su visita.</p>\n";
    print "\n";
} else {
    print "  <p>Concretando, el motivo de su visita es: <strong>$otro</strong>.</p>\n";
    print "\n";
}

if ($info == "") {
    print "  <p class=\"aviso\"><strong>NO</strong> desea recibir informacion sobre ofertas y novedades.</p>\n";
    print "\n";
} else {
    print "  <p><strong>SI</strong> desea recibir informacion sobre ofertas y novedades.</p>\n";
    print "\n";
}
?>