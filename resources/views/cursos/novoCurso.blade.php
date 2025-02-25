@extends('layouts.app', ['current' => 'cursos'])

@section('content')
    <div class="row">
        <div class="container col-md-8 offset-md-2">
            <div class="card border">
                <div class="card-header">
                    <h5 class="card-title">Cadastro de Curso</h5>
                </div>
                <div class="card-body">
                    <form action="/cursos" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nome">Nome do Aluno</label>
                            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}"
                                id="nome" name="nome" placeholder="Digite o nome do curso">

                            @if ($errors->has('nome'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('nome') }}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="idade">Idade do Aluno</label>
                            <input type="number" class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}"
                                id="idade" name="idade" placeholder="Digite a idade do Aluno">

                            @if ($errors->has('idade'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('idade') }}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço do Aluno</label>
                            <input type="text" class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}"
                                id="endereco" name="endereco" placeholder="Digite o endereço do Aluno">

                            @if ($errors->has('endereco'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('endereco') }}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail do Aluno</label>
                            <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                id="email" name="email" placeholder="Digite o e-mail do Aluno">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    {{ $errors->first('email') }}
                            @endif
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Salvar
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                Cancelar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
