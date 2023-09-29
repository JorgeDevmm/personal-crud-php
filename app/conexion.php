<?php


class Conexion{

  private $host = 'localhost';

  private $dbname = 'emarket';

  private $usuario = 'root';

  private $contrasenia = 'abc123*';

  public $con;



  public function instanciar(){

    
    try{

      $con = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->usuario,$this->contrasenia);

        print_r("conexión realizada");


    }catch(PDOException $e){
      
        print_r("no se realizo la conexión".$e->getMessage());
    };

  }


}




?>