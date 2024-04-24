<?php
class Persona {
    private $nombre;
    private $apellido;
    private $dni;
    private $edad;
    private $domicilio;
    private $nacionalidad;
    private $observacion;

    public function __construct($nombre, $apellido, $dni, $edad, $domicilio, $nacionalidad, $observacion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->edad = $edad;
        $this->domicilio = $domicilio;
        $this->nacionalidad = $nacionalidad;
        $this->observacion = $observacion;
    }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    // se pueden agregar otros getters y setters
}
?>
