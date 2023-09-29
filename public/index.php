<?php


$controlador = 'paginas';
$accion = 'inicio';



// validamos si ingresa algo
if(isset($_GET['controlador']) && isset($_GET['accion'])){


  // validacion si es que esta vacio
  if((isset($_GET['controlador']) !== '') && (isset($_GET['accion']) !== '')){

    // almacenaos los valores del controlador y la accion en variables a reutilizar
    $controlador = $_GET['controlador'];
    $accion = $_GET['controlador'];
  }
}

include_once('../app/vista/template.php');


?>