<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "BIENVENIDO AL CURSO";

    }

    public function create(){
        return "en esta pagina puedes crear un curso";

    }

    public function show($curso){
        return "BIENVENIDO AL CURSO: $curso" ;
    }


}
