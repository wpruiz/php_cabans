<?php 

require_once("controllers/controller_plantilla.php");
require_once("controllers/controller_formulario.php");
require_once("models/model_formulario.php");
require_once("assets/models_externos/model_smtp.php");
require_once("assets/models_externos/model_phpmailer.php");

$plantilla = new ControladorPlantilla();
$plantilla->ctrTraerPlantilla();

 ?>