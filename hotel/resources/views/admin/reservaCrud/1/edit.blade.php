@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{ url('ReservUpdate') }}/{{$reserva->id}}">
                @csrf
                <label for="name" class="col-md-4 col-form-label text-md-right">Inforações de Hospede</label>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="col">{{$reserva->name}}</th>
                                        <th scope="col">{{$reserva->email}}</th>
                                    </tr>
                                    <tr>
                                        <td>Data De Nascimento:</td>
                                        <td>{{$reserva->data_nascimento}}</td>
                                    </tr>
                                    <tr>
                                        <td>Telefone:</td>
                                        <td>{{$reserva->telefone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Nacionalidade:</td>
                                        <td>{{$reserva->nacionalidade}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><hr>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Número</label>
                    <div class="col-md-6">
                        <input id="numero" name="numero" type="text" class="form-control" value="{{$reserva->numero}}" autofocus>
                    </div>
                </div>

                
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Andar</label>
                    <div class="col-md-6">
                        <input id="andar" name="andar" type="text" class="form-control" value="{{$reserva->andar}}" autofocus>
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
                        <input id="anotacoes" name="anotacoes" type="text" class="form-control" value="{{$reserva->anotacoes}}" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Data Entrada</label>
                    <div class="col-md-6">
                        <input id="data_entrada" name="data_entrada" type="date" class="form-control" value="{{$reserva->data_entrada}}"  autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Data Saida</label>
                    <div class="col-md-6">
                        <input id="data_saida" name="" type="date" class="form-control" value="{{$reserva->data_saida}}" autofocus>
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