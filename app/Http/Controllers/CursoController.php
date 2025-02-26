<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.cursos', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.novoCurso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|min:3|max:20',
            'email' => 'required|email|min:3|max:20|unique:cursos',
        ],
        [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 20 caracteres',
            'email.required' => 'O campo e-mail é obrigatório',
            'email.email' => 'O campo e-mail deve ser válido',
            'email.min' => 'O campo e-mail deve ter no mínimo 3 caracteres',
            'email.max' => 'O campo e-mail deve ter no máximo 20 caracteres',
            'email.unique' => 'O e-mail informado já existe',
        ]);

        $curso = new Curso();
        $curso->nome = $request->input('nome');
        $curso->email = $request->input('email');
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
            return view('cursos.editarCurso', compact('cursos'));
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

    public function indexJson()
    {
        $cursos = Curso::all();
        return json_encode($cursos);
    }
}
