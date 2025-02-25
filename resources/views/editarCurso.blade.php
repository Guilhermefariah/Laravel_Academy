@extends('layouts.app', ['current' => 'cursos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/cursos/{{ $cursos->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCurso">Nome do Curso</label>
                    <input type="text" class="form-control" id="nomeCurso" name="nomeCurso" value="{{ $cursos->nome }}"
                        placeholder="Digite o nome do curso">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection
