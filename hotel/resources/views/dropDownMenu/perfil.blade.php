@extends('layouts.app')

@section('content')
<div class="container inline">
    <div class="text-center">
        <p>
        <h2>Edite seus Detalhes pessoais aqui</h2>
        </p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <td colspan="2">
                                <h1>Dados Pessoais</h1>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="col">{{$perfil->name}}</th>
                            <th scope="col">{{$perfil->email}}</th>
                        </tr>
                        <tr>
                            <td>Data De Nascimento:</td>
                            <td>{{$perfil->data_nascimento}}</td>
                        </tr>
                        <tr>
                            <td>Telefone:</td>
                            <td>{{$perfil->telefone}}</td>
                        </tr>
                        <tr>
                            <td>Nacionalidade:</td>
                            <td>{{$perfil->nacionalidade}}</td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <table class="table">
                    <thead>
                        <tr>
                            <td colspan="2">
                                <h1>Endereço</h1>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cep</td>
                            <td>{{$perfil->cep}}</td>
                        </tr>
                        <tr>
                            <td>Rua</td>
                            <td>{{$perfil->rua}}</td>
                        </tr>
                        <tr>
                            <td>Bairro</td>
                            <td>{{$perfil->bairro}}</td>
                        </tr>
                        <tr>
                            <td>Estado</td>
                            <td>{{$perfil->estado}}</td>
                        </tr>
                        <tr>
                            <td>Cidade</td>
                            <td>{{$perfil->cidade}}</td>
                        </tr>
                        <tr>
                            <td>Numero da Casa</td>
                            <td>{{$perfil->numero_casa}}</td>
                        </tr>
                        <tr>
                            <td>Complemento</td>
                            <td>{{$perfil->complemento}}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <a href="{{ route('perfilEdit') }}" class="btn btn-secondary active" role="button">Editar</a>
                </div>
            </div>
        </div>
        <br>
        <div class="text-center">
            <p>
            <h2>Segurança</h2>
            </p>
            <br>
        </div>
        <div class="text-center">
            <hr>
            <p class="text-center"> Delete sua conta: </p>
            <a href="{{ route('destroyPerfil','$perfil->UID') }}" class="btn btn-secondary active bg-danger" role="button">Click aqui para deletar sua conta permanentemente</a></p>
            <hr>
        </div>
    </div>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Website 2021</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/solaris_hotel" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Hotel-Solaris-103806305415514" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://wa.me/+5561984128849" target="_blank"><i class="fab fa-whatsapp"></i></a>

                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Politica de privacidade</a>
                    <a class="link-dark text-decoration-none" href="#!">Termos de uso</a>
                </div>
            </div>
        </div>
    </footer>
    @endsection