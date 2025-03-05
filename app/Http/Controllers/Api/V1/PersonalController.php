<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Vistas\VtPersonal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Obtener listado completo de personales.
     */
    public function obtenerPersonales()
    {
        $personales = VtPersonal::select('idpersonal','nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->get();
        return response()->json($personales);
    }

    /**
     * Obtener listado completo de personales paginados.
     */
    public function obtenerConPaginacion()
    {
        //
        $personales = VtPersonal::select('idpersonal','nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->paginate(5);
        return response()->json($personales);
    }

    /**
     * Obtener un personal por el parametro documento.
     */

    public function obtenerPorDocumento($documento)
    {
        //
        $personal = VtPersonal::select('nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->where('documento', $documento)->first();
        return response()->json($personal);
    }

    /**
     * Obtener un personal por el parametro codigo (Codigo de bombero).
     */

    public function obtenerPorCodigo($codigo)
    {
        //
        $personal = VtPersonal::select('nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->where('codigo', $codigo)->first();
        return response()->json($personal);
    }
}
