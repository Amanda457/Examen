<?php
require_once "Planta.php";

class webPlanta{

    public string $name;
    public array $inventario;

    function __construct(string $name){
        $this->name = $name;
        $this->inventario = array();
    }

    public function quePlantaTardaMasDiasEnBrotar(): void{
        $masDias = 0;
        $plantaTardaMasenBrotar = null;

        foreach ($this->inventario as $planta) {
            if ($planta->diasBrotar > $masDias) {
                $masDias = $planta->diasBrotar;
                $plantaTardaMasenBrotar = $planta;
            }
        }
        echo "La planta que tarda más dias en brotar es: " . PHP_EOL . $plantaTardaMasenBrotar->__toString();
    }

    public function buscarPlantaPorTipo($tipoBuscado){
        echo "Estas son las plantas en inventario del siguiente tipo: " . $tipoBuscado . PHP_EOL;
        foreach ($this->inventario as $planta) {
            if ($planta->tipo->getTipo() == $tipoBuscado) {
                echo $planta->__toString() . PHP_EOL;
            }
        }
    }
}
