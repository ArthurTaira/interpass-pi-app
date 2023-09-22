<?php

namespace App\Http\Controllers;

use App\Models\Ingressos;
use App\Http\Requests\StoreIngressosRequest;
use App\Http\Requests\UpdateIngressosRequest;
use Illuminate\Http\Client\ResponseSequence;

class IngressosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ingressos = Ingressos::all();

        return response()->json(['data' => $ingressos]);
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
    public function store(StoreIngressosRequest $request)
    {
        $ingressos = Ingressos::create($request->all());

        return response()->json($ingressos, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingressos $ingressos)
    {
        $ingressos = Ingressos::find($ingressos);

        if (!$ingressos) {
            return response()->json(['message' => 'Ingresso não encontrado'], 404);
        }

        return response()->json($ingressos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingressos $ingressos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIngressosRequest $request, Ingressos $ingressos)
    {
        $ingressos = Ingressos::find($ingressos);

        if (!$ingressos) {
            return response()->json(['message' => 'Ingresso não encontrado'], 404);
        }

        // Faça o update do tipo
        $ingressos->update($request->all());

        // Retorne o tipo
        return response()->json($ingressos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingressos $ingressos)
    {
        $ingressos = Ingressos::find($ingressos);

        if (!$ingressos) {
            return response()->json(['message' => 'Ingresso não encontrado!'], 404);
        }  
  
        // Delete the brand
        $ingressos->delete();

        return response()->json(['message' => 'Ingresso deletado com sucesso!'], 200);
    }
}
