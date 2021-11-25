<?php
include 'Persona.php'; //la incluimos para poder acceder a ella
class Estudiante extends Persona
{
//Atributo valor el valor que paga el estudiante
private $valor;
//Método que obtiene el valor de lo que paga el estudiante.
public function getvalor()
{

return $this->valor;
}

//Método que obtiene el valor de lo que paga el estudiante con descuento.
public function getvalorDescuento()
{
      
return $this->valor *0.7;
}

//Método que permite cambiar el valor del curso del estudiante.
public function setvalor($value)
{
$this->valor=$value;
}
//Constructor Clase Estudiante

public function __construct($nombre,$identificacion,$fechanacimiento,$valor)
{
/* como iniciamos el atributo nombre que lo hereda de la
clase Persona para ello el atributo nombre debe ser declarado
como protected.*/
$this->nombre=$nombre;
$this->valor=$valor;
$this->identificacion=$identificacion;
$this->fechanacimiento=$fechanacimiento;
}
}
