<?php

namespace App\Http\Controllers;

use App\Models\EstadoPaciente;
use App\Models\Pacientes;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Request
     */
    public function index()
    {
        $pacientes = Pacientes::all();
        $tipoDocumento = TipoDocumento::all();
        $estadoPaciente = EstadoPaciente::all();

        return view('pacientes.index', compact('pacientes', 'tipoDocumento', 'estadoPaciente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Pacientes::all();
        $tipoDocumento = TipoDocumento::all();

        return view('pacientes.create', compact('pacientes', 'tipoDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $stateDefault = 1;

        $request->merge(['fk_estado_paciente' => $stateDefault]);

        $pacientes = Pacientes::create($request->all());
        $pacientes->save();

        return redirect()->route('pacientes.show', $pacientes->id)->with('success', 'Paciente creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pacientes $pacientes)
    {
        $pacientes = Pacientes::all();
        $tipoDocumento = TipoDocumento::all();

        return view('pacientes.show', compact('pacientes', 'tipoDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pacientes $pacientes)
    {
        $pacientes = Pacientes::all();
        $tipoDocumento = TipoDocumento::all();

        return view('pacientes.edit', compact('pacientes', 'tipoDocumento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pacientes $pacientes)
    {
        $pacientes->update($request->all());

        return redirect()->route('pacientes.show', $pacientes->id)->with('success', 'Paciente actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pacientes $pacientes)
    {
        $pacientes->delete();

        return redirect()->route('pacientes.index', $pacientes->id)->with('success', 'Paciente eliminado con éxito');
    }
}
