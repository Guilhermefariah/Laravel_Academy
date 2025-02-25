@extends('layouts.app', ['current' => 'cursos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            @if (count($cursos) > 0)
                <h5 class="card-title">Cadastro de Cursos</h5>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Nome do Curso</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cursos as $curso)
                            <tr>
                                <td>{{ $curso->id }}</td>
                                <td>{{ $curso->nome }}</td>
                                <td>
                                    <a href="/cursos/editar/{{ $curso->id }}" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="/cursos/apagar/{{ $curso->id }}" class="btn btn-danger btn-sm">Apagar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h5 class="card-title">Nenhum curso cadastrado</h5>
            @endif
        </div>
        <div class="card-footer">
            <a href="/cursos/novo" class="btn btn-primary btn-sm">Novo Curso</a>
        </div>
    </div>
@endsection
