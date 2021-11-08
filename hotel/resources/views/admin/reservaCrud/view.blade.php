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
                        <th>Dados Pessoais</th>
                        <th>Dados de reserva</th>
                        <th>Valor Total</th>
                        <th>Consumiveis</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Dados Pessoais</th>
                        <th>Dados de reserva</th>
                        <th>Valor Total</th>
                        <th>Consumiveis</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($reserva as $reserva)
                        <tr>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->id}}</p></th>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->name}}</p></th>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->telefone}} - {{$reserva->email}}</p></th>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->tipo_quarto}} - {{$reserva->numero}}</p></th>
                            <th><a href="{{ route('ReserView',$reserva->id) }}" class="btn btn-secondary active"role="button">Consumiveis</a></th>
                            
                            <th><a href="{{ route('ReserShow',$reserva->FuncID) }}" class="btn btn-secondary active"role="button">Vizualizar</a></th>
                            <th><a href="{{ route('ReserEdit',$reserva->FuncID) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{ route('ReserDestroy',$reserva->FuncID) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection