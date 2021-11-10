@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">

    <div class="card-header py-3">
        <form method="POST" action="{{ url('consStore',$consumo[0]->CSID) }}">
            <h6 class="m-0 font-weight-bold text-primary">Produtos</h6>
            <select id="produto" name="produto" class="form-control">
                @foreach($produto as $produto)
                <option value="{{$produto->id}}">
                    <p href="{{ route('consView',$produto->id) }}">{{$produto->nome}} - {{$produto->valor}}</p>
                </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary active">Adicionar</button>
        </form>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach ($consumo as $consumo)
                    <tr>
                        <th>
                            <p href="{{ route('consView',$consumo->id) }}">{{$consumo->LID}}</p>
                        </th>
                        <th>
                            <p href="{{ route('consView',$consumo->id) }}">{{$consumo->nome}}</p>
                        </th>
                        <th>
                            <p href="{{ route('consView',$consumo->id) }}">{{$consumo->PID}}</p>
                        </th>
                        <th><a href="{{ route('consDestroy',$consumo->id) }}" class="btn btn-secondary active" role="button">Excluir</a></th>
                        @endforeach
                        <!-- <tr>
                        <th colspan="" class="text-center">TOTAL</th>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection