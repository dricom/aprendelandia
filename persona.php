<?php
class Persona
{
  //Definición de Atributos
  protected $identificacion;
  protected $nombre;
  protected $fechanacimiento;

  //Constructor
  public function __construct($nombre,$identificacion,$fechanacimiento)
  {
    $this->identificacion=$identificacion;  
    $this->nombre=$nombre;
    $this->fechanacimiento=$fechanacimiento;
    
  }

  //Definición de Métodos
  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($value)
  {
    $this->nombre=$value;
  }

  public function getIdentificacion()
  {
   return $this->identificacion;
  }

  public function setIdentificación($value)
  {
   $this->nombre=$value;
  }

  public function getFechaNacimiento()
  {
   return $this->fechaNacimiento;
  }

  public function setFechaNacimiento($value)
  {
   $this->fechaNacimiento=$value;
  }
}
