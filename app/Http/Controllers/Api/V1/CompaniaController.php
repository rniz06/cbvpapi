<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Vistas\VtCompania;
use Illuminate\Http\Request;

class CompaniaController extends Controller
{
    public function obtenerCompanias()
    {
        $companias = VtCompania::select('idcompanias', 'compania', 'departamento', 'ciudad', 'orden')->orderBy('orden', 'asc')->get();
        return response()->json($companias);
    }

    public function obtenerConPaginacion()
    {
        $companias = VtCompania::paginate(5);
        return response()->json($companias);
    }

    public function obtenerCompania($compania)
    {
        //
        $compania = VtCompania::where('compania', $compania)->first();
        return response()->json([
            'compania' => $compania->compania,
            'departamento' => $compania->departamento,
            'ciudad' => $compania->ciudad,
        ]);
    }
}
