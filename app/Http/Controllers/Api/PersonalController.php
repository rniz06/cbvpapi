<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function obtenerPersonales()
    {
        //
        $personales = Personal::select('nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->get();
        return response()->json([
            'estado' => true,
            'personales' => $personales
        ]);
    }

    public function obtenerPorDocumento($documento)
    {
        //
        $personal = Personal::select('nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->where('documento', $documento)->first();
        return response()->json([
            'estado' => true,
            'personal' => $personal
        ]);
    }

    public function obtenerPorCodigo($codigo)
    {
        //
        $personal = Personal::select('nombrecompleto', 'codigo', 'documento', 'fecha_juramento', 'categoria', 'estado', 'pais', 'sexo', 'compania')->where('codigo', $codigo)->first();
        return response()->json([
            'estado' => true,
            'personal' => $personal
        ]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
