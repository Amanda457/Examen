<?php
require_once "florece.php";
require_once "tipoplanta.php";

class Planta{
    public string $name;
    public florece $florece;
    public TipoPlanta $tipo;
    public int $diasBrotar;
    public int $diasMadurar;

    function __construct(string $name, florece $florece, TipoPlanta $tipo, int $diasBrotar, int $diasMadurar) {
        $this->name = $name;
        $this->florece = $florece;
        $this->tipo = $tipo;
        $this->diasBrotar = $diasBrotar;
        $this->diasMadurar = $diasMadurar;
    }

    public function __toString(): string{
        $mensaje = "Nombre: " . $this->name . ", " . $this->florece->getFlorece() . ", Tipo de planta: " . $this->tipo->getTipo() . ", Tarda en brotar: " . $this->diasBrotar . " días, Tarda en madurar: " . $this->diasMadurar . " dias." . PHP_EOL;
        return $mensaje;
    }
}
