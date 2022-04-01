<?php
require_once("../../conexion/CONEXION.PHP");
session_start();
class Usuario extends Conexion{

    public function __construct()
    {
        $this ->db = parent::__construct();
    }
public function login($email, $password){
    $tabla = $this->db ->prepare("SELECT email, password FROM usuario
    WHERE email = :email AND password = :password");
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':password', $password);
    $tabla->execute();

    //rowCount busca en la tabla una coincidencia si la encontro =1
    if($tabla->rowCount()==1) {
        $loginUsuario =$tabla->fetch();
        $_SESSION['email'] =$loginUsuario['email'];
        echo"Inicio de sesion Satisfactoria";
         }else{
             echo"Fallo al iniciar sesion. Verifique sus datos";
  }

}// end login

public function insertarUsuario($nombre, $email ,$password){
    //prepare---->prepara la mconsulta SQL enviada ->insert into
    $tabla = $this->db->prepare("INSERT INTO usuario(nombre, email, password)
     VALUE (:nombre, :email, :password)");
    $tabla->bindParam(':nombre', $nombre);
    $tabla->bindParam(':email', $email);
    $tabla->bindParam(':password',$password);
    if($tabla->execute()){
        echo "Registro de usuario satisfactorio..";
        header('refresh:3; url=../vista/add.php');
    }else{
        echo"fallo al insertar registro..";
        header('refresh:2; url=../../index.php');
    }
    


 }
}//end clase
?>