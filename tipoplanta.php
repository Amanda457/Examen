<?php

enum TipoPlanta: string{
    case arbol = "Arbol";
    case arbusto = "Arbusto";
    case herbacea = "Herbacea";

    public function getTipo(): string{
        return match ($this) {
            self::arbol => "Arbol",
            self::arbusto => "Arbusto",
            self::herbacea => "Herbacea",
        };
    }
}
