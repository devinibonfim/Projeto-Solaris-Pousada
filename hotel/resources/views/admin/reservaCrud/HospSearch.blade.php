@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
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
                        <th>Ação</th>
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
                        <th>Ação</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($hospede as $hospede)
                        <tr>
                            <th><p href="{{ route('ReserViewHosp',$hospede->id) }}">{{$hospede->HospID}}</p></th>
                            <th><p href="{{ route('ReserViewHosp',$hospede->id) }}">{{$hospede->name}}</p></th>
                            <th><p href="{{ route('ReserViewHosp',$hospede->id) }}">{{$hospede->email}}</p></th>
                            <th><p href="{{ route('ReserViewHosp',$hospede->id) }}">{{$hospede->telefone}}</p></th>
                            <th><p href="{{ route('ReserViewHosp',$hospede->id) }}">{{$hospede->data_nascimento}}</p></th>
                            <th><p href="{{ route('ReserViewHosp',$hospede->id) }}">{{$hospede->cidade}} - {{$hospede->estado}}
                                                                                    <br>{{$hospede->bairro}} - {{$hospede->rua}}
                                                                                    <br>Casa: {{$hospede->numero_casa}}</p></th>
                            <th><a href="{{ route('ReserAdd2',$hospede->HospID) }}" class="btn btn-secondary active"role="button">Selecionar</a></th>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection