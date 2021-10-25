@extends('layouts.app')

@section('content')

<head>
    <link rel="stylesheet" href="style-form.css">
</head>

<header>
    <div class="background-room-standard "></div>
</header>
<section class="site-section">
    <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Faça sua reserva!</h2>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="">Data de Chegada</label>
                        <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input id="date" type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-6 form-group"> 
                        <label for="">Data de saída</label>
                        <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input id="date" type="date" class="form-control" />
                        </div>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="room">Quarto</label>
                        <select name="" id="room" class="form-control">
                            <option value="">1 Quarto</option>
                            <option value="">2 Quartos</option>
                            <option value="">3 Quartos</option>
                            <option value="">4 Quartos</option>
                            <option value="">5 Quartos</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="room">Hospedes</label>
                        <select name="" id="room" class="form-control">
                            <option value="">1 Hospede</option>
                            <option value="">2 Hospedes</option>
                            <option value="">3 Hospedes</option>
                            <option value="">4 Hospedes</option>
                            <option value="">5+ Hospedes</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control ">
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
                        <p><a href="#" class="btn btn-xl btn-primary btn-sm">Reserve agora</a></p> 
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <h3 class="mb-5">Sala em destaque</h3>
            <div class="media d-block room mb-0">
                <figure>
                    <img src="\assets\img\portfolio\1.jpg" alt="Generic placeholder image" class="img-fluid">
                    <div class="overlap-text">
                        <span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                            <span class="ion-ios-star"></span>
                        </span>
                    </div>
                </figure>
                <div class="media-body">
                    <h3 class="mt-0"><a href="#">Quarto Standard</a></h3>
                    <ul class="room-specs">
                        <li><span class="ion-ios-crop"></span> <b> Tamanho do quarto: </b> 24 m <sup>2</sup></li>
                        <li><span class="ion-ios-people-outline"></span> Até 2 Hospedes.</li>
                        <li><span class="ion-ios-people-outline"></span> Banheiro privativo.</li>
                        <li><span class="ion-ios-people-outline"></span> Cama casal ou 2 solteiro.</li>
                        <li><span class="ion-ios-people-outline"></span> Comodidades dos quartos: Frigobar, Ventilador, Sofá, Mesa de trabalho, Telefone, TV, Canais via satélite, Canais a cabo e Varanda.</li>
                    </ul>
                    <p> <b>Fumantes: ​Não é permitido fumar.</b> </p>
                    <p><a href="#" class="btn btn-primary btn-sm">RESERVE AQUI PARA ALUGAR O QUARTO POR R$70</a></p>
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