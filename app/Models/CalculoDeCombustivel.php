<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    public function calcular() {
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $valorgasolina = 4.80;
        $consumoGasolina = ($distancia / $autonomia) * $valorgasolina;

        return $consumoGasolina;
    }
}
