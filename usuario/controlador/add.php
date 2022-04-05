<?php
    require_once("../modelo/usuario.php");

    if(isset($_REQUEST["btn_enviar"])){
        
        $nombre =$_POST["nombre"];
        $email = $_POST["email"];
        $password =$_POST["password"];
        $modeloUsuario = new Usuario();

        $modeloUsuario->insertarUsuario($nombre,$email,$password);

        if(isset($modeloUsuario)){
            echo "Registro de usuario satisfactorio..";
            header('refresh:3; url=../vista/add.php');
        }else{
            echo"fallo al insertar registro..";
            header('refresh:2; url=../../index.php');



    





        }

       /*  if(isset($modeloUsuario)==1){
            header('Location: ../vista/login.php');
    }else{
        header('Location: ../../index.php');

    }
 */
    }

    ?>