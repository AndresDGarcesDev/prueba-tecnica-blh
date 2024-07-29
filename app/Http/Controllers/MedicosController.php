<?php

namespace App\Http\Controllers;

use App\Models\EspecialidadMedico;
use App\Models\Medicos;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = Medicos::all();
        $tipoDocumento = TipoDocumento::all();
        $especialidadMedico = EspecialidadMedico::all();

        return view('medicos.index', compact('medico', 'tipoDocumento', 'especialidadMedico'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medico = Medicos::all();
        $tipoDocumento = TipoDocumento::whereIn('id', [1, 2])->get();
        $especialidadMedico = EspecialidadMedico::all();

        return view('medicos.create', compact('medico', 'tipoDocumento', 'especialidadMedico'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicos = Medicos::create($request->all());
        $medicos->save();

        return redirect()->route('medicos.show', $medicos->id)->with('success', 'Médico creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicos $medicos)
    {
        $tipoDocumento = TipoDocumento::all();
        $especialidadMedico = EspecialidadMedico::all();

        return view('medicos.show', compact('medicos', 'tipoDocumento', 'especialidadMedico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicos $medicos)
    {
        $medicos = Medicos::all();
        $tipoDocumento = TipoDocumento::all();
        $especialidadMedico = EspecialidadMedico::all();

        return view('medicos.edit', compact('medicos', 'tipoDocumento', 'especialidadMedico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicos $medicos)
    {
        $medicos->update($request->all());

        return redirect()->route('medicos.show', $medicos->id)->with('success', 'Médico actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicos $medicos)
    {
        $medicos->delete();

        return redirect()->route('medico.index', $medicos->id)->with('success', 'Médico eliminado con éxito');
    }
}
