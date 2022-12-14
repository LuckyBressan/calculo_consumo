<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeCombustivel extends Model
{
    public function combustivel() {
        return $_GET['combustivel'];
    }
    public function calcular() {
        $valorcombustivel = $_GET['valorcombustivel'];
        $distancia = $_GET['distancia'];
        $autonomia = $_GET['autonomia'];

        $consumoGasolina = ($distancia / $autonomia) * $valorcombustivel;

        return $consumoGasolina;
    }
}
