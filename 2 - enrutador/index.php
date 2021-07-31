<?php //index.php
require_once 'Controladores/rutasC.php';

require_once 'Modelos/rutasM.php';

$rutas = new RutasC();
$plantilla = $rutas->Plantilla();
include $plantilla;
?>