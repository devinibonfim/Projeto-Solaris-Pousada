@extends('layouts.app')

@section('content')

        <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">BEM VINDO</div>
            <div class="masthead-heading text-uppercase">SOLARIS POUSADAS</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Explorar</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Serviços</h2>
                <h3 class="section-subheading text-muted">Nossos serviços principais.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-drumstick-bite fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Café da manhã</h4>
                    <p class="text-muted">O buffet de café-da-manhã diário inclui uma variedade de frutas frescas, pães e frios. 
                        Você pode saborear especialidades regionais, bem como uma seleção de bebidas, 
                        no restaurante do hotel.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-water fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Piscina</h4>
                    <p class="text-muted">Oferecemos uma piscina privativa para todos os hospedes com uma bela vista para o mar, jacuzzi e sauna.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Segurança</h4>
                    <p class="text-muted">Cuidamos de todos os detalhes para garantir a proteção dos pertences, das informações e dos dados de todos os hospedes.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Quartos</h2>
                <h3 class="section-subheading text-muted">Veja os quartos disponiveis.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..."/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Standard</div>
                            <div class="portfolio-caption-subheading text-muted">Diária: R$ 100</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/2.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Premium</div>
                            <div class="portfolio-caption-subheading text-muted">Diária: R$ 130</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/3.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Deluxe</div>
                            <div class="portfolio-caption-subheading text-muted">Diária: R$ 170</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Sobre</h2>
                <h3 class="section-subheading text-muted">Conheça mais sobre a história da nossa rede de pousadas!</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2010</h4>
                            <h4 class="subheading">O grande plano!</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Uma grande empresa com uma forte tradição de família decidiu criar um hotel na cidade onde a mesma se encontra, desejando ser reconhecido por ter um excelente atendimento e hospitalidade.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Março 2010</h4>
                            <h4 class="subheading">A construção!</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Iniciasse o projeto de construção do hotel, com os melhores engenheiros e materiais do mercado para garantir segurança e longevidade para todos.</p></div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.png" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Dezembro 2014</h4>
                            <h4 class="subheading">Finalização</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">O hotel finalmente está pronto, com 9 andares e 10 quartos por andar, serviços que incluem café da manhã, piscina, jacuzzi, saunas, WI-FI 5G e muito mais! </p></div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Venha
                            <br />
                            Se hospedar
                            <br />
                            Conosco!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Suporte</h2>
                <h3 class="section-subheading text-muted">Em caso de dúvidas nos mande uma mensagem!</h3>
            </div>
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nome *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Um nome é obrigatório.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="E-mail *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Um email é obrigatório.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">E-mail inválido.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Telefone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Um telefone é obrigatório.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Mensagem *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Uma mensagem é obrigatória.</div>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Formulário enviado com sucesso!</div>
                        <!-- Para ativar o formulário, inscreva-se em
                        <br />
                        <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div></div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar Mensagem</button></div>
            </form>
        </div>
    </section>
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
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Quarto Standard</h2>
                                <p class="item-intro text-muted">Confira todos os serviços STANDARD.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg" alt="..." />
                                <p>Este quarto dispõe de ventilador. O banheiro privativo inclui secador de cabelo e chuveiro.</p>
                                <p> <b>Tamanho do quarto</b> 24 m²
                                <p>   No seu banheiro privativo: Vaso sanitário, chuveiro, Toalhas, Papel higiênico. </p>
                                <p> 
                                    Comodidades dos quartos: Frigobar, Ventilador, Sofá, Mesa de trabalho, Telefone, TV, Canais via satélite, Canais a cabo e Varanda.
                                </p>
                                <p>
                                <strong> Fumantes: ​Não é permitido fumar </strong>
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Categoria:</strong>
                                        STANDARD
                                    </li>
                                    <li>
                                        <strong>Preço:</strong>
                                        R$ 100,00
                                    </li>
                                </ul>
                                <div class="">
                                    <a href="{{ route('standard_index')}}" class="btn btn-primary btn-xl text-uppercase" type="button" value="standart">
                                        <i class="me-1"></i>
                                        ALUGAR
                                    </a>

                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        FECHAR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Quarto Premium</h2>
                                <p class="item-intro text-muted">Confira todos os serviços PREMIUM.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg" alt="..." />
                                <p>Esta suíte dispõe de ar-condicionado, área de estar com varanda, além de micro-ondas. O banheiro privativo inclui secador de cabelo e chuveiro.</p>
                                <p> <b>Tamanho do quarto</b> 30 m²
                                <p>   No seu banheiro privativo: Vaso sanitário, Banheira ou chuveiro, Toalhas, Papel higiênico. </p>
                                <p> 
                                    Comodidades dos quartos: Guarda-roupa, Frigobar, Ar-condicionado, Instalações hipoalergênicas, Micro-ondas, Sofá, Mesa de trabalho, Área de estar, Telefone, Canais via satélite, TV de tela plasma, Canais a cabo e Varanda.
                                </p>
                                <p>
                                <strong> Fumantes: ​Não é permitido fumar </strong>
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Categoria:</strong>
                                        PREMIUM
                                    </li>
                                    <li>
                                        <strong>Preço:</strong>
                                        R$ 130,00
                                    </li>
                                </ul>
                                <div class="">
                                    <a href="{{ route('premium_index')}}" class="btn btn-primary btn-xl text-uppercase" type="button" value="standart">
                                        <i class="me-1"></i>
                                        ALUGAR
                                    </a>

                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        FECHAR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Quarto Deluxe</h2>
                                <p class="item-intro text-muted">Confira todos os serviços DELUXE.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg" alt="..." />
                                <p>Esta suíte dispõe de ar-condicionado, espaço adicional, área de estar com sofá-cama e varanda, além de cozinha com micro-ondas, fogão e pia. O banheiro privativo inclui secador de cabelo e chuveiro.</p>
                                <p> <b>Tamanho do quarto</b> 39 m²
                                <p>   No seu banheiro privativo: Vaso sanitário, Banheira ou chuveiro, Toalhas, Papel higiênico. </p>
                                <p> 
                                    Comodidades dos quartos: Guarda-roupa, Frigobar, Ar-condicionado, Cofre, Instalações hipoalergênicas, Isolamento acústico, Micro-ondas, Cozinha, Sofá, Mesa de trabalho, Área de estar, TV, Telefone, Canais via satélite, TV de tela plasma, Canais a cabo, Varanda, Arara para roupas e Sofá-cama.
                                </p>
                                <p>
                                <strong> Fumantes: ​Não é permitido fumar </strong>
                                </p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Categoria:</strong>
                                        DELUXE
                                    </li>
                                    <li>
                                        <strong>Preço:</strong>
                                        R$ 170,00
                                    </li>
                                </ul>
                                <div class="">
                                    <a href="{{ route('deluxe_index')}}" class="btn btn-primary btn-xl text-uppercase" type="button" value="standart">
                                        <i class="me-1"></i>
                                        ALUGAR
                                    </a>

                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        FECHAR
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>    
@endsection