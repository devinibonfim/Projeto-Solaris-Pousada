@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Reserva</h6>
        <a href="{{ route('ReserAdd1') }}" class="btn btn-secondary active"role="button">Adicionar</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Dados Pessoais</th>
                        <th>Informações do quarto</th>
                        <th>Valor de reserva(Atual)</th>
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
                        <th>Informações do quarto</th>
                        <th>Valor de reserva(Atual)</th>
                        <th>Consumiveis</th>
                        <th>Visualizar</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($reserva as $reserva)
                        <tr>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->RID}}</p></th>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->name}}</p></th>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->telefone}} <br>
                                                                                {{$reserva->email}}</p></th>

                            <th><p href="{{ route('ReserView',$reserva->id) }}">Quarto: {{$reserva->nome}} <br>
                                                                                Andar: {{$reserva->andar}} <br>
                                                                                Numero do Quarto: {{$reserva->numero}}</p></th>
                            <th><p href="{{ route('ReserView',$reserva->id) }}">{{$reserva->valor}}.00</p></th>

                            <th><a href="{{ route('consView',$reserva->RID) }}" class="btn btn-secondary active"role="button">Consumiveis</a></th>
                            <th><a href="{{ route('ReserShow',$reserva->RID) }}" class="btn btn-secondary active"role="button">Vizualizar</a></th>
                            <th><a href="{{ route('ReserEdit1',$reserva->RID) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{ route('ReserDestroy',$reserva->id) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection