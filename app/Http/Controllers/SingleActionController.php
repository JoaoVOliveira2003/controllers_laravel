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
        echo $this->metodoPrivado(3);
        echo 'publico';
    }

    private function metodoPrivado($num){
        echo '|o numero privado é ' . $num . '|';
    }
}
