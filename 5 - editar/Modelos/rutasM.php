<?php //  Modelos/rutasM.php
class Modelo{
    static public function RutasModelo($rutas){
        if( $rutas == "ingreso" || 
            $rutas == 'empleados' || 
            $rutas == 'registrar' || 
            $rutas == 'salir' ||
            $rutas == 'editar')
        {
            $pagina = "Vistas/modulos/".$rutas. ".php";
        }
        else if($rutas == 'index'){
            $pagina = "Vistas/modulos/signin.php";
        }
        else {
            $pagina = "Vistas/modulos/signin.php";
        }
        return $pagina;
    }
}
?>