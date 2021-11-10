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
                        <th scope="col">Nome</th>
                        <th scope="col">{{$reserva->name}}</th>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td>{{$reserva->telefone}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$reserva->email}}</td>
                    </tr>
                    <tr>
                        <td>Nacionalidade</td>
                        <td>{{$reserva->nacionalidade}}</td>
                    </tr>
                    <tr>
                        <td>Data de Nascimento</td>
                        <td>{{$reserva->data_nascimento}}</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <td colspan="2">
                            <h1>Dados da reserva</h1>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tipo de quarto</td>
                        <td>{{$reserva->nome}}</td>
                    </tr>
                    <tr>
                        <td>Andar do quarto</td>
                        <td>{{$reserva->andar}}</td>
                    </tr>
                    <tr>
                        <td>Número do quarto</td>
                        <td>{{$reserva->numero}}</td>
                    </tr>
                    <tr>
                        <td>Valor do quarto</td>
                        <td>{{$reserva->valor}}</td>
                    </tr>
                    <tr>
                        <td>Data de Entrada</td>
                        <td>{{$reserva->data_entrada}}</td>
                    </tr>
                    <tr>
                        <td>Data de Saida</td>
                        <td>{{$reserva->data_saida}}</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <table class="table">
                <thead>
                    <tr>
                        <td colspan="2">
                            <h1>Endereço do hospede</h1>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cep</td>
                        <td>{{$reserva->cep}}</td>
                    </tr>
                    <tr>
                        <td>Rua</td>
                        <td>{{$reserva->rua}}</td>
                    </tr>
                    <tr>
                        <td>Bairro</td>
                        <td>{{$reserva->bairro}}</td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td>{{$reserva->estado}}</td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td>{{$reserva->cidade}}</td>
                    </tr>
                    <tr>
                        <td>Numero da Casa</td>
                        <td>{{$reserva->numero_casa}}</td>
                    </tr>
                    <tr>
                        <td>Complemento</td>
                        <td>{{$reserva->complemento}}</td>
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