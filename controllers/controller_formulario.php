<?php 

    class ControladorFormularios{

        static public function ctrSolicitud(){

            if(isset($_POST["nombre"])){

                if($_POST["nombre"] != "" || $_POST["email"] != "" || $_POST["telefono"] != ""
                    || $_POST["ciudad"] != "" || $_POST["fechaInicial"] != "" || $_POST["fechaFinal"] != ""
                    || $_POST["seleccion"] != "" || $_POST["transporte"] != "" || $_POST["mensaje"] != ""){
                    
                    $tabla = "tab_solicitudes";
                    $datos = array("nombre"=> $_POST["nombre"], 
                    			   "email"=> $_POST["email"],
                                   "telefono"=> $_POST["telefono"],
                                   "ciudad"=> $_POST["ciudad"],
                                   "fechaInicial"=> $_POST["fechaInicial"],
                                   "fechaFinal"=> $_POST["fechaFinal"],
                                   "seleccion"=> $_POST["seleccion"],
                                   "transporte"=> $_POST["transporte"],
                    			   "mensaje"=> $_POST["mensaje"]);
                    

                    $respuesta = ModeloFormularios::mdlSolicitud($tabla, $datos);

                    // if ($respuesta =="ok") {

                    //     $respuestaEmail = ModeloFormularios::mdlEnvioEmail($tabla, $datos);
                        
                    //     echo '<pre>'; print_r($respuestaEmail); echo '</pre>';
                    // }
                    
                    return $respuesta;
                }
            }
        }
    }
?>