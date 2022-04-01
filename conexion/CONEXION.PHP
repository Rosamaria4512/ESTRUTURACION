<?php

class Conexion {
     protected $db;
     private $driver   ="mysql";
     protected $host   ="localhost";
     private $based    = "adsi_2338368";
     private $usuario  ="root";
     private $contrasena ="";

     public function __construct(){
        try {
        $db = new PDO("{$this->driver}:host={$this->host};dbname={$this->
            based}", $this->usuario,$this->contrasena);
            //echo"la conexion a la BD es exitosa " ;
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
        //"conexion exitosa"
        } catch (PDOException $e) {
            echo "Ha ocurrido un error al conectarse a la Bd" .$e->getMessage();
            
          }
     
     
    }


}//end clase

/* $objConexion = new Conexion();
print_r($objConexion);
 */ 
?>
