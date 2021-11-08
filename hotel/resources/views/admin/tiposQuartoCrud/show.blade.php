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
                            <h1>Informações do tipo de quarto</h1>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nome</td>
                        <td>{{$tipoQuarto->nome}}</td>
                    </tr>
                    <tr>
                        <td>Valor</td>
                        <td>{{$tipoQuarto->valor}}</td>
                    </tr>
                    <tr>
                        <td>Tamanho</td>
                        <td>{{$tipoQuarto->tamanho}}</td>
                    </tr>
                    <tr>
                        <td>Validade</td>
                        <td>{{$tipoQuarto->limite_pessoa}}</td>
                    </tr>
                    <tr>
                        <td>Descrição</td>
                        <td>{{$tipoQuarto->descricao}}</td>
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