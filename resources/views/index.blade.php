@extends('layouts.app', ['current' => 'home'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="card-group">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Alunos</h5>
                        <p class="card-text">Aqui você pode cadastrar os alunos</p>
                        <a href="/alunos" class="btn btn-primary">Cadastrar alunos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Cursos</h5>
                        <p class="card-text">Aqui você pode escolher os cursos</p>
                        <a href="/cursos" class="btn btn-primary">Cadastrar cursos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
