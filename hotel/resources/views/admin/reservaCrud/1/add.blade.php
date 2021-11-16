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
                    <label for="name" class="col-md-4 col-form-label text-md-right">Tipo de quarto</label>
                    <div class="col-md-6">
                        <select id="quarto" name="quarto" class="form-control">
                            @foreach ($quarto as $quarto) 
                                <option value="{{$quarto->id}}"><p href="{{ route('ReserAdd2',$quarto->id) }}">{{$quarto->nome}} - Andar: {{$quarto->andar}} - Numero: {{$quarto->numero}}</p></option>  
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
            </form>
        </div>
    </div>
</div>

@endsection