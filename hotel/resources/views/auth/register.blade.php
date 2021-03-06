@extends('layouts.app')

@section('content')
<br> <br>

<style>
    .brackground {
        background-image: url("https://cdn.discordapp.com/attachments/693131838004134009/898997266352840744/background.jpg") !important;
        background-position: center !important;
        background: no-repeat;
        background-color: #fff;
        background-position: top, center !important;
        background-size: 100% !important;
        background-size: cover !important;
    }
</style>


<link rel="stylesheet" href="styles.css" !important>

<body class="brackground">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">Crie sua conta!</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-Mail') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua senha') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="data_nascimento" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>
                                <div class="col-md-6">
                                    <input id="data_nascimento" type="date" class="form-control" name="data_nascimento" required autocomplete="data_nascimento">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                                <div class="col-md-6">
                                    <input id="telefone" type="text" class="form-control" name="telefone" required autocomplete="telefone">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nacionalidade" class="col-md-4 col-form-label text-md-right">{{ __('Nacionalidade') }}</label>
                                <div class="col-md-6">
                                    <input id="nacionalidade" type="text" class="form-control" name="nacionalidade" required autocomplete="nacionalidade">
                                </div>
                            </div>

                            <hr>

                            <!-- ENDERECO -->

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

                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Registre-se') }}
                                    </button>
                                    <a class="btn btn-link2" href="{{ route('login') }}">
                                        {{ __('Já possui uma conta?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection