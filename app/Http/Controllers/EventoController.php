<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();

        return response()->json(['data' => $eventos]);
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
    public function store(StoreEventoRequest $request)
    {
        $eventos = Evento::create($request->all());

        return response()->json($eventos, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        $eventos = Evento::find($evento);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventoRequest $request, Evento $evento)
    {
        $eventos = Evento::find($request);

        if (!$eventos) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }

        $eventos->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $eventos = Evento::find($evento);

        if (!$eventos) {
            return response()->json(['message' => 'Evento não encontrado!'], 404);
        }
        
        $eventos->delete();

        return response()->json(['message' => 'Evento deletado com sucesso!'], 200);
    }
}
