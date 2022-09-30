<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeIMC extends Model
{
    use HasFactory;

    function calcula_idade($nascimento) {
        $nascimento=explode('-',$nascimento);
        $data=date('d/m/Y'); $data=explode('/',$data);
        $anos=$data[2]-$nascimento[0]; 
        if($nascimento[1] > $data[1]) return $anos-1; 
        if($nascimento[1] == $data[1])
        { 
           if($nascimento[3] <= $data[0]) {
              return $anos;
           }
           else {
               return $anos-1;
            }
        }
      return $anos;
    }


    public function calcular() {
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];

        return round($peso / ($altura * $altura));

    }
    
    public function classificassao(){
        $altura = $_GET['altura'];
        $peso = $_GET['peso'];
        
        $IMC = ($peso / ($altura * $altura));

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

        return $resultado;
    }
}
