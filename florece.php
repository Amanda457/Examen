<?php

enum Florece: string{
    case Florece = "Florece";
    case noFlorece = "No florece";

    public function getFlorece(): string{
        return match ($this) {
            self::Florece => "Florece",
            self::noFlorece => "No Florece",
        };
    }
}
