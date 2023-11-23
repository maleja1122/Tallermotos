<?php

require_once ("conexion.php");
class cliente{
    private $id;
    private $placa;
    private $marca;
    private $año;
    
    const TABLA = 'moto';

      public function getId() {
        return $this ->id;
      }
      public function getPlaca(){
        return $this->placa;
      }
      public function getMarca(){
        return $this ->marca;
      }
      public function getAño(){
        return $this ->año;
      }
    

      public function setId($id){
        $this->id = $id;
      }
      public function setPlaca($placa){
        $this->placa = $placa;
      }
      public function setMarca($marca){
        $this->marca = $marca;
      }
      public function setAño($año){
        $this->año= $año;
      }
      
      public function __construct($placa,$marca,$año,$id=null ){
        $this->id = $id;
        $this->nombre = $placa;
        $this->apellido = $marca;
        $this->celular = $año;
        
      }
      public function guardarCita($fecha, $hora, $clienteId) {
        try {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO cita (fecha, hora, cliente_id, moto_id) VALUES (:fecha, :hora, :cliente_id, :moto_id)');
            $consulta->bindParam(':fecha', $fecha);
            $consulta->bindParam(':hora', $hora);
            $consulta->bindParam(':cliente_id', $clienteId);
            $consulta->bindParam(':moto_id', $this->id);
            $consulta->execute();
            $conexion = null;
            return "Cita guardada correctamente";
        } catch (PDOException $e) {
            return "Error al guardar la cita: " . $e->getMessage();
        }
    }
}