<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imcController
{
    public function index(){
        return view("imc.index");
    }
}
