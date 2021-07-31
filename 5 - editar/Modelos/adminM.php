<?php  //Modelos/adminM.php
    require_once "conexionBD.php";

    class AdminM extends ConexionBD{
        static public function IngresoM($datosC, $tablaBD){
            $cbd = ConexionBD::cBD();
            $usuario = $datosC['usuario'];
            $clave = $datosC['clave'];
            $query = "SELECT * FROM $tablaBD WHERE username='$usuario' and password='$clave'";
            $result = $cbd->query($query);
            return $result->fetch_array(MYSQLI_ASSOC);
        }
    }
?>