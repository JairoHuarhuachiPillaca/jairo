<?php  //Controladores/adminC.php
class AdminC{
    public function entrar(){
        session_start();
        if(isset($_SESSION['signin']))
            header("location: index.php?ruta=notaspublicas");
        if(isset($_POST["username"])){
            $datosC = array("username"=>$_POST["username"],"password"=>$_POST["password"]);
            $tablaBD = "usuarios";
            $respuesta = AdminM::IngresoM($datosC, $tablaBD);
            if ($respuesta["usuario"]==$_POST["username1"] && 
                $respuesta["clave"]==$_POST["password"]){
                session_start();
                $_SESSION['signin']=true;
                header("location: index.php?ruta=notaspublicas");
            }
            else
            {
                echo "ERROR AL INGRESAR";
            }
        }
    }
}
?>