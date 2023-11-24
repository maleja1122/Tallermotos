<?php

require_once ("conexion.php");
class mecanico{
    private $id;
    private $nombre;
    private $apellido;

    private $celular;
    private $especializacion;
    
    const TABLA = 'mecanico';

      public function getId() {
        return $this ->id;
      }
      public function getNombre(){
        return $this->nombre;
      }
      public function getApellido(){
        return $this ->apellido;
      }

      public function getCelular(){
        return $this ->celular;
      }
      public function getEspecializacion(){
        return $this ->especializacion;
      }
      
      public function setId($id){
        $this->id = $id;
      }
      public function setNombre($nombre){
        $this->nombre = $nombre;
      }
      public function setApellido($apellido){
        $this->apellido = $apellido;
      }

      public function setCelular($celular){
        $this->celular = $celular;
      }
      public function setEspecializacion($especializacion){
        $this->especializacion= $especializacion;
      }
      

      public function __construct($nombre,$apellido, $celular, $especializacion,$id=null ){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->celular = $celular;
        $this->especializacion = $especializacion;
        
      }
       public function guardarMecanico (){

        {

                $conexion = new Conexion();
                $consulta = $conexion->prepare('INSERT INTO ' .self::TABLA .'(nombre, apellido, celular,  especializacion) VALUES (:nombre, :apellido, :celular, :especializacion)');
                $consulta -> bindParam(':nombre', $this->nombre);
                $consulta -> bindParam(':apellido', $this->apellido);
                $consulta -> bindParam(':celular', $this->celular);
                $consulta -> bindParam(':especializacion', $this->especializacion);
                $consulta -> execute();
                $this->id = $conexion->lastInsertId();
                $conexion = null;
            
                // Redirigir a la página que muestra los mecánicos después de guardar
                header("Location: mostrarMeca.php");
                exit(); // Asegura que se detenga la ejecución después del redireccionamiento
            }
          }
    public static function mostrarMeca(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' ORDER BY nombre');
        $consulta -> execute();
        $registros = $consulta->fetchAll();
        return $registros;

    }
}
?>