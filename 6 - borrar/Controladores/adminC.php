<?php  //Controladores/adminC.php
class AdminC{
    public function IngresoC(){
        session_start();
        if(isset($_SESSION['Ingreso']))
            header("location: index.php?ruta=empleados");
            echo("holis");
        if(isset($_POST["usuarioI"])){
            $datosC = array(    
                        "usuario"=>$_POST["usuarioI"], 
                        "clave"=>$_POST["claveI"]);
            $tablaBD = "administradores";
            
            $respuesta = AdminM::IngresoM($datosC, $tablaBD);
            if ($respuesta["usuario"]==$_POST["usuarioI"] && 
                $respuesta["clave"]==$_POST["claveI"]){
                session_start();
                $_SESSION['Ingreso']=true;
                header("location: index.php?ruta=empleados");
            }
            else
            {
                echo "ERROR AL INGRESAR";
            }
        }
    }
}
?>