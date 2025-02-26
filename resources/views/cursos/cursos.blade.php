@extends('layouts.app', ['current' => 'cursos'])

@section('content')
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <h5 class="card-title">Cadastro de Curso</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover" id="tabelacursos">
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cursos as $cursos)
                                <tr>
                                    <th scope="row">{{ $cursos->id }}</th>
                                    <td>{{ $cursos->nome }}</td>
                                    <td>{{ $cursos->email }}</td>
                                    <td>
                                        <a href="/cursos/{{ $cursos->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="/cursos/{{ $cursos->id }}" class="btn btn-danger btn-sm">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
