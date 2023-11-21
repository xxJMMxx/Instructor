<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los instructores
        $instructors = Instructor::all();

        // Retornar la vista con los instructores
        return view('instructors.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retornar la vista con los instructores
        return view('instructors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $data = $request->validate([
            'name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'sex' => 'required|max:200',
            'RFC' => 'required|date',
            'training' => 'required|max:200',
        ]);

            Instructor::create($data);

        return redirect()->route('instructors.index')->with('success', 'Nuevo instructor agregado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        return view('instructors.show', compact('instructors'));
        #se cambio una "s" en instructor
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        return view('instructors.edit', compact('instructors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        $data = $request->validate([
            'name' => 'required|max:200',
            'last_name' => 'required|max:200',
            'sex' => 'required|max:200',
            'RFC' => 'required|date',
            'training' => 'required|max:200',
        ]);

        $instructor->update($data);

        return redirect()->route('instructors.index')->with('success', 'Instructor actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();

        return redirect()->route('instructors.index')->with('success', 'Instructor eliminado satisfactoriamente.');
    }
}