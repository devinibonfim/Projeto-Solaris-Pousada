@extends('layouts.app')

@section('content')
<br><br>
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
                        <th scope="col">{{$funcionario->name}}</th>
                        <th scope="col">{{$funcionario->email}}</th>
                    </tr>
                    <tr>
                        <td>Pis Pasep</td>
                        <td>{{$funcionario->pis_pasep}}</td>
                    </tr>
                    <tr>
                        <td>Data De Nascimento:</td>
                        <td>{{$funcionario->data_nascimento}}</td>
                    </tr>
                    <tr>
                        <td>Telefone:</td>
                        <td>{{$funcionario->telefone}}</td>
                    </tr>
                    <tr>
                        <td>Nacionalidade:</td>
                        <td>{{$funcionario->nacionalidade}}</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <td colspan="2">
                            <h1>Dados Cadastrais</h1>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RA</td>
                        <td>{{$funcionario->ra}}</td>
                    </tr>
                    <tr>
                        <td>RG</td>
                        <td>{{$funcionario->rg}}</td>
                    </tr>
                    <tr>
                        <td>Pis Pasep</td>
                        <td>{{$funcionario->pis_pasep}}</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <td colspan="2">
                            <h1>Endere??o</h1>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cep</td>
                        <td>{{$funcionario->cep}}</td>
                    </tr>
                    <tr>
                        <td>Rua</td>
                        <td>{{$funcionario->rua}}</td>
                    </tr>
                    <tr>
                        <td>Bairro</td>
                        <td>{{$funcionario->bairro}}</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>{{$funcionario->estado}}</td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td>{{$funcionario->cidade}}</td>
                    </tr>
                    <tr>
                        <td>Numero da Casa</td>
                        <td>{{$funcionario->numero_casa}}</td>
                    </tr>
                    <tr>
                        <td>Complemento</td>
                        <td>{{$funcionario->complemento}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

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