@extends('layouts.app')

@section('content')

<div class="container inline">
    <div class="text-center">
        <p><h2>Edite seus Detalhes pessoais aqui</h2></p>
        <p>Atualize e/ou adicione suas informações.</p>
    </div>
    <br>
    <div class="text-center">
        <hr>
        <p> <span class="px-left"> Nome: </span> {{ Auth::user()->name }} <a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
        <p> <span class="px-left"> Endereço de E-mail: </span> {{ Auth::user()->email }} <a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
        <p> <span class="px-left"> Número de telefone: </span> +55 (61) 98888-9999 <a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
        <p> <span class="px-left"> Data de nascimento: </span> <input type="date" name="date" id=""><a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
        <p><span class="px-left"> Nacionalidade: </span> Brasileiro <a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
        <p><span class="px-left"> Gênero: </span> 
        <label for="Gênero"><strong>Gênero</strong></label>
            <select id="Gênero" required>
              <option selected disabled value="">Selecione</option>
              <option>Eu sou homem</option>
              <option>Eu sou mulher</option>
              <option>Eu sou não-binário</option>
              <option>Prefiro não dizer</option>
            </select>
        <a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
        <p> <span class="px-left"> Endereço: </span> New York, Miami beach, california, casa 66 <a class="reserva-link text-decoration-none px-right" href="#">Editar</a></p> 
        <hr>
    </div>
    <br>
    <div class="text-center">
        <p><h2>Segurança</h2></p>
        <p class="">Ajuste suas configurações de segurança e configure a autenticação de dois fatores.</p>
        <br> 
    </div>
    <div class="text-center">
        <hr>
        <p> <span class="px-left"> Senha: </span><i> Resete sua senha </i> <a class="reserva-link text-decoration-none px-right" href="#">Resetar</a></p> 
        <hr>
        <p> <span class="px-left"> Autentificação de 2F: </span><i> Ative aqui a Autentificação </i> <a class="reserva-link text-decoration-none px-right" href="#">Configurar</a></p> 
        <hr>
        <p> <span class="px-left"> Delete sua conta: </span><i> Click aqui para deletar sua conta permanentemente </i> <a class="reserva-link text-decoration-none px-right" href="#">Deletar</a></p> 
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