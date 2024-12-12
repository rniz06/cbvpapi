<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Compania;
use Illuminate\Http\Request;

class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function obtenerCompanias()
    {
        //
        $companias = Compania::all();
        return response()->json([
            'estado' => true,
            'companias' => $companias
        ]);
    }

    // Obtener compania
    public function obtenerCompania($compania)
    {
        //
        $compania = Compania::where('compania', $compania)->first();
        return response()->json([
            'estado' => true,
            'compania' => $compania->compania,
            'departamento' => $compania->departamento,
            'ciudad' => $compania->ciudad,
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
    public function show(Compania $compania)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Compania $compania)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Compania $compania)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Compania $compania)
    {
        //
    }
}
