<?php  //Modelos/conexcionBD.php
class ConexionBD{
    static public function cBD(){
        $cbd = new mysqli('localhost','root','Forevianita123','1004520191');
        return $cbd;
    }
}
?>