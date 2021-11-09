@extends('layouts.app')

@section('content')

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{ url('ReserStore') }}">

                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Hospede</label>
                    <div class="col-md-6">
                        <a href="{{ route('ReserViewHosp') }}" class="btn btn-secondary active"role="button">Buscar</a>
                    </div>
                </div>
                <br><hr>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Número</label>
                    <div class="col-md-6">
                        <input id="numero" name="numero" type="text" class="form-control" autofocus>
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Andar</label>
                    <div class="col-md-6">
                        <input id="andar" name="andar" type="text" class="form-control" autofocus>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Tipo de quarto</label>
                    <div class="col-md-6">
                        <select id="tipoQuarto" name="tipoQuarto" class="form-control">
                            @foreach ($tipoQuarto as $tipoQuarto) 
                                <option value="{{$tipoQuarto->id}}"><p href="{{ route('ReserAdd2',$tipoQuarto->id) }}">{{$tipoQuarto->nome}}</p></option>  
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Anotações</label>
                    <div class="col-md-6">
                        <input id="anotacoes" name="anotacoes" type="text" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Data Entrada</label>
                    <div class="col-md-6">
                        <input id="data_entrada" name="data_entrada" type="date" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Data Saida</label>
                    <div class="col-md-6">
                        <input id="data_saida" name="data_saida" type="date" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">Salva</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection