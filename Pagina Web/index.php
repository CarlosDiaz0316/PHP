<?php
    require_once 'Controlador.php';
    require_once 'GestorCita.php';
    require_once 'Cita.php';
    require_once 'Paciente.php';
    require_once 'Conexion.php';
    $controlador = new Controlador();
    

    if( isset($_GET["accion"])){
if($_GET["accion"] == "asignar"){
$controlador->verPagina('asignar.php');
}
if($_GET["accion"] == "consultar"){
$controlador->verPagina('consulta.php');
}
if($_GET["accion"] == "cancelar"){
$controlador->verPagina('cancelar.php');
}
}
elseif($_GET["accion"] == "guardarCita"){
$controlador->agregarCita($_POST["asignarDocumento"],
$_POST["medico"], $_POST["fecha"], $_POST["hora"],
$_POST["consultorio"]);
header("Location: confirmarcita.php");
exit();}
else {
$controlador->verPagina('inicio.php');
}


?>
