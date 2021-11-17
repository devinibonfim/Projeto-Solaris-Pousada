@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="/Slides-CSS/dist/gallery.prefixed.css">
<link rel="stylesheet" href="/Slides-CSS/dist/gallery.theme.css">

<body>

    <div class="gallery autoplay items-3">
        <div id="item-1" class="control-operator"></div>
        <div id="item-2" class="control-operator"></div>
        <div id="item-3" class="control-operator"></div>

        <!-- Colocar sempre imagens com 2000x600 pra ficar certinho -->

        <figure class="item ">
            <img src="/assets/img/rooms/S1.png" alt="">
        </figure>

        <figure class="item">
            <img src="/assets/img/rooms/S2.png" alt="">
        </figure>

        <figure class="item">
            <img src="/assets/img/rooms/S3.png" alt="">
        </figure>

        <div class="controls">
            <a href="#item-1" class="control-button">•</a>
            <a href="#item-2" class="control-button">•</a>
            <a href="#item-3" class="control-button">•</a>
        </div>
    </div>
</body>

<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Faça sua reserva!</h2>
                <form method="POST" action="{{ url('ReservaHospStore') }}">
                    {{csrf_field()}}
                   
                    <div class="form-group row">
                        <label for="name" class="col-md-12 col-form-label text-md-right">Quartos</label>
                        <div class="col-md-10">
                            <select id="quarto" name="quarto" class="form-control">
                                @foreach ($quarto as $quarto) 
                                    <option value="{{$quarto->id}}"><p href="{{ route('ReserAdd2',$quarto->id) }}">{{$quarto->nome}} - Andar: {{$quarto->andar}} - Numero: {{$quarto->numero}}</p></option>  
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name" class="col-md-12 col-form-label text-md-right">Anotações</label>
                            <div class="col-md-10">
                                <input id="anotacoes" name="anotacoes" type="text" class="form-control" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name" class="col-md-12 col-form-label text-md-right">Data Entrada</label>
                            <div class="col-md-10">
                                <input id="data_entrada" name="data_entrada" type="date" class="form-control" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="name" class="col-md-12 col-form-label text-md-right">Data Saida</label>
                            <div class="col-md-10">
                                <input id="data_saida" name="data_saida" type="date" class="form-control" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <br>
                            <button class="btn btn-x1 btn-primary btn-sm">Reserve agora</button>
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