<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Dá para criar um controlado só com um metodo publico
     */
    public function __invoke(Request $request)
    {
        echo 'publico';
        echo $this->limpar($this->metodoPrivado(3));
        echo 'publico';
    }

    private function metodoPrivado($num){
        return ' |o O numero privado é ' . $num . '|  ';
    }
}
