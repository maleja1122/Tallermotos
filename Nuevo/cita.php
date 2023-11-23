<?php

require_once ("conexion.php");
class cita{
    private $id;
    private $hora;
    private $fecha;
    private $id_mecanico;
    private $id_cliente;
    private $moto; 
    
    const TABLA = 'cita';

      public function getId() {
        return $this ->id;
      }
      public function getHora(){
        return $this->hora;
      }
      public function getFecha(){
        return $this ->fecha;
      }
      public function getId_mecanico(){
        return $this ->id_mecanico;
      }
      public function getId_cliente(){
        return $this ->id_cliente;
      }
      public function getMoto(){
        return $this ->moto;
      }
      
      public function setId($id){
        $this->id = $id;
      }
      public function setHora($hora){
        $this->hora = $hora;
      }
      public function setFecha($fecha){
        $this->fecha = $fecha;
      }
      public function setId_mecanico($id_mecanico){
        $this->id_mecanico= $id_mecanico;
      }
      public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
      }

      public function setmoto($moto){
        $this->moto = $moto;
      }


    
      public function __construct($hora,$fecha,$id_mecanico,$id_cliente,$moto, $id=null ){
        $this->id = $id;
        $this->hora = $hora;
        $this->fecha = $fecha;
        $this->id_mecanico = $id_mecanico;
        $this->id_cliente = $id_cliente;
        $this->id_cliente = $moto;
        
      }
      public function guardarCita() {
        try {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (hora, fecha, id_mecanico, id_cliente, moto) VALUES (:hora, :fecha, :id_mecanico, :id_cliente, :moto)');
            $consulta->bindParam(':hora', $this->hora);
            $consulta->bindParam(':fecha', $this->fecha);
            $consulta->bindParam(':id_mecanico', $this->id_mecanico);
            $consulta->bindParam(':id_cliente', $this->id_cliente);
            $consulta->bindParam(':moto', $this->moto);
            $consulta->execute();
            $this->id = $conexion->lastInsertId();
            $conexion = null; // Cerrar la conexión después de la ejecución exitosa
        } catch (PDOException $e) {
            // Manejo de errores de la base de datos (puedes personalizar el manejo de errores)
            echo "Error al guardar la cita: " . $e->getMessage();
        }
    }

    public static function mostrarCita() {
        try {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('SELECT id, hora, fecha, id_mecanico, id_cliente, moto FROM ' . self::TABLA . ' ORDER BY id');
            $consulta->execute();
            $registros = $consulta->fetchAll();
            return $registros;
        } catch (PDOException $e) {
            // Manejo de errores de la base de datos (puedes personalizar el manejo de errores)
            echo "Error al mostrar las citas: " . $e->getMessage();
            return []; // Devolver un array vacío en caso de error
        }
    }
}
?>
