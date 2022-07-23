<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pregunta;


class PreguntasController extends Controller
{
    //
    public function index()
    {
        $preguntas = Pregunta::paginate();

        return view('welcome', compact('preguntas'));
            
    }
}
