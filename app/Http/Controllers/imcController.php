<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CalculoDeIMC;

class imcController extends Controller
{
    public function index() {
        return view('inicio');
    }

    public function cal() {
        $imcController = new imcController();

        $idade = $imcController->calcula_idade();
        $pontosimc = $imcController->calcular();
        $imc = $imcController->classificassao();

        return view('resultado',['idade'=>$idade,'pontos'=>$pontosimc,'IMC'=>$imc]);
    }
}