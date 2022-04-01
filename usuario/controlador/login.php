<?php
require_once(".././modelo/usuario.php");

if(isset($_REQUEST["btn_enviar"])==1) {
    $email = $_POST["email"];
    $password = $_POST["passwoerd"];

    $loginUsuario= new Usuario();
    $loginUsuario->login($email, $password);

    if(isset($loginUsuario)==1){
        //print_r($verloginUsuario);
//die(); permite terminar el proceso hasta este punto
        //die();

        //header mepermite llevarlo a  otro archivo
        header('Location: ../vista/perfil.php');
    }else{
        header('Location: ../../index.php');

    }
    

}
?>