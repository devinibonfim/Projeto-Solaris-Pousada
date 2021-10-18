@extends('layouts.app')

@section('content')

<header class="background-room-deluxe">
</header>
<section class="site-section">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Faça sua reserva!</h2>
            <form oninput="total.value = (nights.valueAsNumber * 170) + ((guests.valueAsNumber - 1) * 25)">
            {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="">Data de Chegada</label>
                        <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input name="beginDate" id="date" type="date" class="form-control" />
                        </div>
                    </div>
                    <br><br><br>
                </div>
                    <label>Número de noites (quartos custam R$ 170,00 por noite): </label>
                    <input  type="number" id="nights" name="nights" value="1" min="1" max="30" required>
                    <br>
                    <label>Números de hospedes (cada hospede adiciona R$25.00 por noite): </label>
                    <input type="number" id="guests" name="guests" value="1" min="1" max="10" required>
                    <label>Total Estimado:</label>
                    R$ <output id="total" name="total">170</output>.00
                    <br><br>
                    <div class="col-md-6 form-group">
                        <label for="room">Tipo de cama</label>
                        <select name="" id="room" class="form-control">
                            <option>1 Cama de casal</option>    
                            <option>2 Camas de solteiro.</option>
                        </select>
                        <br>
                    </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control " required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="message">Escreva uma mensagem</label>
                        <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <br>
                        <!-- <input type="submit" value="Reserve aqui" class="btn btn-primary"> -->
                        <!-- <p><a href="#" class="btn btn-xl btn-primary btn-sm">Reserve agora</a></p> -->
                        <a href="/reserva"><button class="btn btn-xl btn-primary btn-sm">Reserve agora</button></a>
                    </div>
                </div>
            </form>
            @if(session('message'))
                <div>
                    <h1>{{ session('message') }}</h1>
                </div>
            @endif
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h3 class="mb-5">Sala em destaque</h3>
            <div class="media d-block room mb-0">
                <figure>
                    <img src="\assets\img\portfolio\3.jpg" alt="Generic placeholder image" class="img-fluid">
                    <div class="overlap-text">
                        <span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                        </span>
                    </div>
                </figure>
                <div class="media-body">
                    <h3 class="mt-0"><a href="#">Quarto Deluxe</a></h3>
                    <ul class="room-specs">
                        <li><span class="ion-ios-crop"></span> <b> Tamanho do quarto: </b> 39 m <sup>2</sup></li>
                        <li><span class="ion-ios-people-outline"></span> Até 4 Hospedes.</li>
                        <li><span class="ion-ios-people-outline"></span> Banheiro privativo.</li>
                        <li><span class="ion-ios-people-outline"></span> Cama casal ou 2 solteiro.</li>
                        <li><span class="ion-ios-people-outline"></span> Comodidades dos quartos: Guarda-roupa, Frigobar, Ar-condicionado, Cofre, Instalações hipoalergênicas, Isolamento acústico, Micro-ondas, Cozinha, Sofá, Mesa de trabalho, Área de estar, TV, Telefone, Canais via satélite, TV de tela plasma, Canais a cabo, Varanda, Arara para roupas e Sofá-cama.</li>
                    </ul>
                    <p> <b>Fumantes: ​Não é permitido fumar.</b> </p>
                </div>
            </div>
        </div>
    </div>
</section>
    
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