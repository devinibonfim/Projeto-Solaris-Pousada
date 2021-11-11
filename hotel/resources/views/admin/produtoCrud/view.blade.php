@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Produtos</h6>
        <a href="{{ route('ProdAdd') }}" class="btn btn-secondary active"role="button">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>#</th>
                        <th>Nome</th>
                        <th>Validade</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Validade</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($produto as $produto)
                        <tr>
                            <th><p href="{{ route('ProdView',$produto->id) }}">{{$produto->id}}</p></th>
                            <th><p href="{{ route('ProdView',$produto->id) }}">{{$produto->nome}}</p></th>
                            <th><p href="{{ route('ProdView',$produto->id) }}">{{$produto->validade}}</p></th>
                            <th><p href="{{ route('ProdView',$produto->id) }}">{{$produto->valor}}.00</p></th>
                            <th><p href="{{ route('ProdView',$produto->id) }}">{{$produto->descricao}}</p></th>
                            <th><a href="{{ route('ProdShow',$produto->id) }}" class="btn btn-secondary active"role="button">Vizualizar</a></th>
                            <th><a href="{{ route('ProdEdit',$produto->id) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{ route('ProdDestroy',$produto->id) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection