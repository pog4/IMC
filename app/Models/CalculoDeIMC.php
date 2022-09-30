<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMC extends Model
{
    use HasFactory;

    public function calcular() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        $IMC = round(($peso / ($altura * $altura)),2);

    }
    
    public function classificassao(){
        if ($IMC <= 0) {
            $resultado = "ERRO";
        }
        elseif ($IMC <= 18.5){
            $resultado = "MAGRO";
        }
        elseif ($IMC <= 24.9){
            $resultado = "NORMAL";
        }
        elseif ($IMC <= 29.9){
            $resultado = "SOBREPESO";
        }
        elseif ($IMC < 40){
            $resultado = "OBESO";
        }
        elseif ($IMC >= 40){
            $resultado = "MÓRBIDO";
        }
    }

    public function saude() {
        $nome = $_GET['nome'];
        $pes = $_GET['peso'];
        $alt = $_GET['altura'];


        $texto = "$nome você tem $data anos, sua altura é $alt, seu peso é $pes e seu IMC é: $IMC. 
        Pelo cálculo do IMC você está classificado como “ $result ”";

        return $texto;

    }
}
