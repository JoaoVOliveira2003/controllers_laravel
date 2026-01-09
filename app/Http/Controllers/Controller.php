<?php

namespace App\Http\Controllers;

//todo metodo que estiver aqui vai estar lá nos outros metodos dos outros lugares
abstract class Controller
{
    public function limpar($string){
        return strtoupper(trim($string));
    }
}
