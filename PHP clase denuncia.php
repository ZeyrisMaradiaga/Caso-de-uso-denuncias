<?php
class Denuncia {
    private $denunciante;
    private $denunciado;
    private $fechaHora;
    private $lugar;
    private $delito;
    private $estado;
    private $detalleHechos;

    public function __construct($denunciante, $denunciado, $fechaHora, $lugar, $delito, $detalleHechos) {
        $this->denunciante = $denunciante;
        $this->denunciado = $denunciado;
        $this->fechaHora = $fechaHora;
        $this->lugar = $lugar;
        $this->delito = $delito;
        $this->estado = 'Abierto';
        $this->detalleHechos = $detalleHechos;
    }

    // Aagregar otros getters y setters
}
?>
