<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\TareasPruebaModel;



class TareasPruebaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {

            $tareas = TareasPruebaModel::all();
        return Inertia::render('ListaTareas',[
            'tareas' =>$tareas   
        ]);
    }

    public function create() {

        return Inertia::render('Tareas');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {

        $request->validate([
            'Descripcion' => 'string|required'
        ]);

        $newTarea = new TareasPruebaModel;        
        try {
            $newTarea->fill($request->all());
            $newTarea->save();
        } catch (Exception $e) {
                // Capturar la excepción y manejarla
                    $mensaje = [
                        'message' => 'Error al guardar la Tarea', 
                        'error' =>  $e->getMessage()      
                    ];
            return response()->json($mensaje,400);
            
        }

        $mensaje = [
                        'message' => 'Tarea guardada correctamente', 
                        
                    ];
        return response()->json($mensaje,200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
