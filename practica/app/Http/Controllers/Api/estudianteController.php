<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PHPUnit\Framework\Constraint\JsonMatches;

class estudianteController extends Controller
{
    public function llamando(){
        return 'saludos desde la parte de Estudiante controller';

    }
    
    public function creando(){
        return 'Estoy creando Estudiante controller';

    }
    public function llamandoAlMetodo(): view {
        return view('vista');
    }
}
