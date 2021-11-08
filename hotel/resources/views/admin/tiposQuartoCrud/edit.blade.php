@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{ url('TQuartoUpdate') }}/{{$tipoQuarto->id}}">
                
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                    <div class="col-md-6">
                        <input id="nome" name="nome" type="text" class="form-control" value="{{$tipoQuarto->nome}}" autofocus>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Valor</label>
                    <div class="col-md-6">
                        <input id="valor" name="valor" type="text" class="form-control" value="{{$tipoQuarto->valor}}" autofocus>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Tamanho</label>
                    <div class="col-md-6">
                        <input id="tamanho" name="tamanho" type="text" class="form-control" value="{{$tipoQuarto->tamanho}}" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Limite de pessoas</label>
                    <div class="col-md-6">
                        <input id="limite_pessoa" name="limite_pessoa" type="text" class="form-control" value="{{$tipoQuarto->limite_pessoa}}" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Descrição</label>
                    <div class="col-md-6">
                        <input id="descricao" name="descricao" type="text" class="form-control" value="{{$tipoQuarto->descricao}}" autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection