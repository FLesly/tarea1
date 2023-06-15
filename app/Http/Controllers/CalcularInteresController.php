<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcularInteresController extends Controller
{
    //
    public function calcular($capitalInicial, $tasaInteres,$plazo){
        $resultados = array(); 
        for ($n = 1; $n <= $plazo; $n++) {
            $capitalFinal = $capitalInicial * pow((1 + $tasaInteres), $n);
            $resultados[] = $capitalFinal; 
            
            $capitalInicial = $capitalFinal; 
        }
        return view('calcular.index', ['resultados' => $resultados]);
    }
}
