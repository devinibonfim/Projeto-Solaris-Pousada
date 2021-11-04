@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Funcionarios</h6>
        <a href="{{ route('FuncAdd') }}" class="btn btn-secondary active"role="button">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                        <th>Nacionalidade</th>
                        <th>RA</th>
                        <th>RG</th>
                        <th>PIS PASEP</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>Telefone</th>
                        <th>Nacionalidade</th>
                        <th>RA</th>
                        <th>RG</th>
                        <th>PIS PASEP</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($funcionario as $funcionario)
                        <tr>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->FuncID}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->name}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->email}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->data_nascimento}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->telefone}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->nacionalidade}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->ra}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->rg}}</p></th>
                            <th><p href="{{ route('FuncView',$funcionario->id) }}">{{$funcionario->pis_pasep}}</p></th>
                            <th><a href="{{ route('FuncShow',$funcionario->id) }}" class="btn btn-secondary active"role="button">Vizualizar</a></th>
                            <th><a href="{{ route('FuncEdit',$funcionario->id) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{ route('FuncDestroy',$funcionario->id) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection