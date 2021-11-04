@extends('layouts.app')

@section('content')
<br><br>

<p><h2>{{$funcionario->name}} / {{$funcionario->email}}</h2></p>
<hr>
<h4>Dados Pessoais</h4>
    <h6>
        <br>
            <p>Data De Nascimento</p>
            <p>{{$funcionario->data_nascimento}}</p>
        <br>
            <p>Telefone</p>
            <p>{{$funcionario->telefone}}</p>
        <br>
            <p>Nacionalidade</p>
            <p>{{$funcionario->nacionalidade}}</p>
        <br>
    </h6>
<hr>
<h4>Dados Cadastrais de Funcionario</h4>
    <h6>
        <br>
            <p>Ra</p>
            <p>{{$funcionario->ra}}</p>
        <br>
            <p>RG</p>
            <p>{{$funcionario->rg}}</p>
        <br>
            <p>Pis Pasep</p>
            <p>{{$funcionario->pis_pasep}}</p>
        <br>
    </h6>

@endsection