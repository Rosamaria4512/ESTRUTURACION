<?php
    require_once("../modelo/usuario.php");

    if(isset($_REQUEST["btn_enviar"])){
        
        $nombre =$_POST["nombre"];
        $email = $_POST["email"];
        $password =$_POST["password"];
        $modeloUsuario = new Usuario();
        $insertarUsuario= $modeloUsuario->insertarUsuario($nombre,$email,$password);

       /*  if(isset($modeloUsuario)==1){
            header('Location: ../vista/login.php');
    }else{
        header('Location: ../../index.php');

    }
 */
    }

    ?>