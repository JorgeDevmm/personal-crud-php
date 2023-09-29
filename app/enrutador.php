
<?php




// ruta de la carpeta controladores, del controlador a usar
require_once('controladores/controlador_'.$controlador.'.php');


// creamos la instancia de la clase controladora mediante los parametros $_GET
$nommbreClaseControladora = 'Controlador'.ucfirst($controlador);

$instanciaControlador = new $nommbreClaseControladora();


$instanciaControlador->$accion();

?>



