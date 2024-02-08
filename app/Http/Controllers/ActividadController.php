<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $user_id = $request->user()->id;
        $actividades = Actividad::where('user_id', $user_id)->get();
        // dd($actividades);

        return view('dashboard', [
          'actividades' => $actividades 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearActividad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
          'descripcion' => 'required|string|max:255',
          'fecha' =>  'required|date',
          'tiempo' => 'required|numeric|min:1|max:8'
        ]);

        $actividad = new Actividad();
        $actividad->descripcion = $request->input('descripcion');
        $actividad->fecha = $request->input('fecha');
        $actividad->tiempo = $request->input('tiempo');
        $actividad->user_id = $request->user()->id;
        $result = $actividad->save();
        $mensaje = $result ? 'Actividad creada exitosamente': 'Error al crear actividad';        

        return view('crearActividad', [
          'mensaje' => $mensaje 
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actividad $actividad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actividad $actividad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}
