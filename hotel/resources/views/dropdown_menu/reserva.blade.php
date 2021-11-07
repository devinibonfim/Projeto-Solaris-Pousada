@extends('layouts.app')

@section('content')

<div class="container text-center">
    <br> <br> <br> <br>
    <a href="http://127.0.0.1:8000/" target="_blank" rel="noopener noreferrer"><img width="256" height="256" 
    src="https://cf.bstatic.com/psb/mytrips/static/media/bookings-empty.f6d1e091536ec081c442de892cdb505e.png" srcset="https://cf.bstatic.com/psb/mytrips/static/media/bookings-empty.f6d1e091536ec081c442de892cdb505e.png 256w, https://cf.bstatic.com/psb/mytrips/static/media/bookings-empty@2x.bc139fe926ec8a47946e6c6e935e0e0c.png 512w, https://cf.bstatic.com/psb/mytrips/static/media/bookings-empty@3x.5d8f4b54c45b037db50df2fb7b0e3bd4.png 768w" sizes="256px" alt="Globod o planeta">
    </a>
    <br> <br> <br>
    <p class="text-bold text-lg-center text-justify justify-content-center ">As suas viagens ficarão aqui:</p>
    <p class="text-bold text-lg-center text-justify justify-content-center">Essa página mostra todas as suas reservas. Se você tiver feito uma reserva.</p>
    <a class="reserva-link text-decoration-none justify-content-center" href="http://127.0.0.1:8000/#portfolio">De uma olhada nos quartos disponíveis</a>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Footer-->
<footer class="footer py-4" >
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