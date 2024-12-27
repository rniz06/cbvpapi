<?php

namespace App\Http\Controllers\ApiV1;

use App\Http\Controllers\Controller;
use App\Models\Vistas\VtResolucion;
use Illuminate\Http\Request;

class ResolucionV1Controller extends Controller
{
    public function cantidad()
    {
        $cantidad = VtResolucion::count();

        return response()->json(['cantidad_de_resoluciones' => $cantidad]);
    }
}
