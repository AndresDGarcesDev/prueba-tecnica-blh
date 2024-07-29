<?php

namespace App\Http\Controllers;

use App\Models\CitasMedicas;
use App\Models\Medicos;
use App\Models\Pacientes;
use Illuminate\Http\Request;

class CitasMedicasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citasMedicas = CitasMedicas::all();
        $pacienteCita = Pacientes::all();
        $medicoCita = Medicos::all();

        return view('citas.index', compact('citasMedicas', 'pacienteCita', 'medicoCita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $citasMedicas = CitasMedicas::all();
        $pacienteCita = Pacientes::all();
        $medicoCita = Medicos::all();

        return view('citas.create', compact('citasMedicas', 'pacienteCita', 'medicoCita'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $citasMedicas = CitasMedicas::create($request->all());
        $citasMedicas->save();

        return redirect()->route('citas.show', $citasMedicas->id)->with('success', 'Cita médica creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CitasMedicas $citasMedicas)
    {
        $citasMedicas = CitasMedicas::all();
        $pacienteCita = Pacientes::all();
        $medicoCita = Medicos::all();

        return view('citas.show', compact('citasMedicas', 'pacienteCita', 'medicoCita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CitasMedicas $citasMedicas)
    {
        $citasMedicas = CitasMedicas::all();

        return view('citas.edit', compact('citasMedicas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CitasMedicas $citasMedicas)
    {
        $citasMedicas->update($request->all());

        return redirect()->route('citas.show', $citasMedicas->id)->with('success', 'Asistencia actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CitasMedicas $citasMedicas)
    {
        $citasMedicas->delete();

        return redirect()->route('citas.index', $citasMedicas->id)->with('success', 'Cita médica eliminada con éxito');
    }
}
