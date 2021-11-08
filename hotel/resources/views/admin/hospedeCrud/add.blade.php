@extends('layouts.app')

@section('content')

<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <form method="POST" action="{{ url('HospStore') }}">

                @csrf
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>
                    <div class="col-md-6">
                        <input id="name" name="name" type="text" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>
                    <div class="col-md-6">
                        <input id="email" name="email" type="text" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <!-- Senha com vizualização -->
                    <label for="name" class="col-md-4 col-form-label text-md-right">Senha</label>
                    <div class="col-md-6">
                        <input id="password" name="password" type="password" class="form-control" autofocus>
                        <span class="input-group-btn" id="eyeSlash">
                            <button class="btn btn-default reveal" onclick="passwordVisible()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                        </span>
                        <span class="input-group-btn" id="eyeShow" style="display: none;">
                            <button class="btn btn-default reveal" onclick="passwordVisible()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </div>

                <script>
                    function passwordVisible() {
                        var x = document.getElementById("password");
                        if (x.type === "password") {
                            x.type = "text";
                            $('#eyeShow').show();
                            $('#eyeSlash').hide();
                        } else {
                            x.type = "password";
                            $('#eyeShow').hide();
                            $('#eyeSlash').show();
                        }
                    }
                </script>
                <!-- Senha com vizualização Fim -->

                <br><hr>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Data de Nascimento</label>
                    <div class="col-md-6">
                        <input id="data_nascimento" name="data_nascimento" type="date" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Telefone</label>
                    <div class="col-md-6">
                        <input id="telefone" name="telefone" type="text" class="form-control" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Nacionalidade</label>
                    <div class="col-md-6">
                        <input id="nacionalidade" name="nacionalidade" type="text" class="form-control" autofocus>
                    </div>
                </div>

                <!-- ENDERECO -->
                <br><hr>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Cep:</label>
                    <div class="col-md-6">
                        <input name="cep" type="text" id="cep" value="" class="form-control" onblur="pesquisacep(this.value);" /></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Rua:</label>
                    <div class="col-md-6">
                        <input name="rua" type="text" id="rua" class="form-control" autofocus" /></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Bairro:</label>
                    <div class="col-md-6">
                        <input name="bairro" type="text" id="bairro" class="form-control" autofocus" /></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Cidade:</label>
                    <div class="col-md-6">
                        <input name="cidade" type="text" id="cidade" class="form-control" autofocus" /></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Estado:</label>
                    <div class="col-md-6">
                        <input name="uf" type="text" id="uf" class="form-control" autofocus" /></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Numero Casa:</label>
                    <div class="col-md-6">
                        <input name="numero_casa" type="text" id="numero_casa" class="form-control" autofocus" /></label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Complemento:</label>
                    <div class="col-md-6">
                        <input name="complemento" type="text" id="complemento" class="form-control" autofocus" /></label>
                    </div>
                </div>

                <!-- ENDERECO -->

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