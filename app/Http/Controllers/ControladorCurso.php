<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class ControladorCurso extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoCurso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->nome = $request->input('nomeCurso');
        $curso->save();

        return redirect('/cursos');
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
        $cursos = Curso::find($id);
        if (isset($cursos)) {
            return view('editarCurso', compact('cursos'));
        }

        return redirect('/cursos');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cursos = Curso::find($id);
        if (isset($cursos)) {
            $cursos->nome = $request->input('nomeCurso');
            $cursos->save();
        }

        return redirect('/cursos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cursos = Curso::find($id);
        if (isset($cursos)) {
            $cursos->delete();
        }

        return redirect('/cursos');
    }
}
