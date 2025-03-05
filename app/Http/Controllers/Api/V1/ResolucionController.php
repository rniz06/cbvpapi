<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Vistas\VtResolucion;
use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    public function cantidad()
    {
        $cantidad = VtResolucion::count();

        return response()->json(['cantidad_de_resoluciones' => $cantidad]);
    }

    /**
     *  Obtener catidad (count) total de resoluciones
     *  Por Dia, Semana, Mes, Año, del Año actual
     */
    public function cantidadPorDiaSemanaMesAnho()
    {
        $fecha_actual = now();
        $inicio_anho = $fecha_actual->copy()->startOfYear();
        $inicio_mes = $fecha_actual->copy()->startOfMonth();
        $inicio_semana = $fecha_actual->copy()->subDays(7);

        // Obtenemos todos los registros del año en una sola consulta
        $resoluciones = VtResolucion::selectRaw('fecha')
            ->whereYear('fecha', $fecha_actual->year)
            ->get();

        // Calculamos los conteos usando colecciones
        $conteos = [
            'dia' => $resoluciones->where('fecha', $fecha_actual->format('Y-m-d'))->count(),
            'semana' => $resoluciones->where('fecha', '>=', $inicio_semana->format('Y-m-d'))->count(),
            'mes' => $resoluciones->where('fecha', '>=', $inicio_mes->format('Y-m-d'))->count(),
            'anho' => $resoluciones->count()
        ];

        return response()->json($conteos);
    }
}
