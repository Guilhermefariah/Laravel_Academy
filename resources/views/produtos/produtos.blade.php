@extends('layouts.app', ['current' => 'produtos'])

@section('content')
    <div class="card border">
        <div class="card-header">
            <h5 class="card-title">Cadastro de Produtos</h5>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover" id="tabelacursos">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Cursos</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-sm btn-primary" role="button" onclick="novoProduto()">
                Novo Produto
            </button>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="" class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h1 class="modal-title">Novo Produto</h1>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeProduto" class="custom-control-label">
                                Nome do Produto
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="precoProduto" class="custom-control-label">
                                Preço
                            </label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="precoProduto" placeholder="Preço do Produto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="quantidadeProduto" class="custom-control-label">
                                Quantidade
                            </label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="quantidadeProduto"
                                    placeholder="Quantidade de Produto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cursoProduto" class="custom-control-label">
                                Cursos
                            </label>
                            <div class="input-group">
                                <select class="form-control" id="cursoProduto">
                                    <option value="" disabled selected>Selecione um curso</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-danger" data-dissmiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('javascript')
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        function novoProduto() {
            $('#id').val('');
            $('#nomeProduto').val('');
            $('#precoProduto').val('');
            $('#quantidadeProduto').val('');
            $('#cursoProduto').val('');
            $('#dlgProdutos').modal('show');
        }

        function carregarCursos() {
            $.getJSON('/api/cursos', function(data) {
                console.log(data);

                for (let i = 0; i < data.length; i++) {
                    let opcao = '<option value="' +
                        data[i].id + '">' +
                        data[i].nome + '</option>';
                    $('#cursoProduto').append(opcao);
                }
            });
        }

        $(function() {
            carregarCursos();
        });
    </script>
@endsection
