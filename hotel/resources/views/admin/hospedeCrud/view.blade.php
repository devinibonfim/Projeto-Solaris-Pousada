@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Hospede</h6>
        <a href="{{ route('HospAdd') }}" class="btn btn-secondary active"role="button">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Data de Nascimento</th>
                        <th>Endereço</th>
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
                        <th>Telefone</th>
                        <th>Data de Nascimento</th>
                        <th>Endereço</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($hospede as $hospede)
                        <tr>
                            <th><p href="{{ route('HospView',$hospede->id) }}">{{$hospede->HospID}}</p></th>
                            <th><p href="{{ route('HospView',$hospede->id) }}">{{$hospede->name}}</p></th>
                            <th><p href="{{ route('HospView',$hospede->id) }}">{{$hospede->email}}</p></th>
                            <th><p href="{{ route('HospView',$hospede->id) }}">{{$hospede->telefone}}</p></th>
                            <th><p href="{{ route('HospView',$hospede->id) }}">{{$hospede->data_nascimento}}</p></th>
                            <th><p href="{{ route('HospView',$hospede->id) }}">{{$hospede->cidade}} - {{$hospede->estado}}
                                                                                    <br>{{$hospede->bairro}} - {{$hospede->rua}}
                                                                                    <br>Casa: {{$hospede->numero_casa}}</p></th>
                            <th><a href="{{ route('HospShow',$hospede->HospID) }}" class="btn btn-secondary active"role="button">Vizualizar</a></th>
                            <th><a href="{{ route('HospEdit',$hospede->HospID) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{ route('HospDestroy',$hospede->HospID) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection