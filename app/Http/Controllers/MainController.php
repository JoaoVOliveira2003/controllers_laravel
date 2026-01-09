<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ola(){
        echo 'ola';
    }

    public function index(){
        echo 'index';
    }

        public function about(){
        echo 'about';
    }

    public function contact(){
        echo '<p>contact</p>';
    }
}
