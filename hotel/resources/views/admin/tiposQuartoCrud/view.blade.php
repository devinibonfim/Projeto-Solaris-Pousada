@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tipo de quartos</h6>
        <a href="{{ route('TQuartoAdd') }}" class="btn btn-secondary active"role="button">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Tamanho</th>
                        <th>Limite de Pessoas</th>
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
                        <th>Valor</th>
                        <th>Tamanho</th>
                        <th>Limite de Pessoas</th>
                        <th>Descrição</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($tipoQuarto as $tipoQuarto)
                        <tr>
                            <th><p href="{{ route('TQuartoView',$tipoQuarto->id) }}">{{$tipoQuarto->id}}</p></th>
                            <th><p href="{{ route('TQuartoView',$tipoQuarto->id) }}">{{$tipoQuarto->nome}}</p></th>
                            <th><p href="{{ route('TQuartoView',$tipoQuarto->id) }}">{{$tipoQuarto->valor}}</p></th>
                            <th><p href="{{ route('TQuartoView',$tipoQuarto->id) }}">{{$tipoQuarto->tamanho}}</p></th>
                            <th><p href="{{ route('TQuartoView',$tipoQuarto->id) }}">{{$tipoQuarto->limite_pessoa}}</p></th>
                            <th><p href="{{ route('TQuartoView',$tipoQuarto->id) }}">{{$tipoQuarto->descricao}}</p></th>
                            <th><a href="{{ route('TQuartoShow',$tipoQuarto->id) }}" class="btn btn-secondary active"role="button">Vizualizar</a></th>
                            <th><a href="{{ route('TQuartoEdit',$tipoQuarto->id) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{ route('TQuartoDestroy',$tipoQuarto->id) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection