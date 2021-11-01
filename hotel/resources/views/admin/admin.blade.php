@extends('layouts.app')

@section('content')

<h1>Admin</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Database tabela</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th><p href="{{ route('adm',$user->id) }}">{{$user->id}}</p></th>
                            <th><p href="{{ route('adm',$user->id) }}">{{$user->name}}</p></th>
                            <th><p href="{{ route('adm',$user->id) }}">{{$user->email}}</p></th>
                            <th><a href="{{route('adm_edit',$user->id) }}" class="btn btn-secondary active"role="button">Editar</a></th>
                            <th><a href="{{route('adm_destroy',$user->id) }}" class="btn btn-secondary active"role="button">Excluir</a></th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection