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

        $imc = $imcController->saude();

        return view('resultado',['IMC'=>$imc]);
    }
}