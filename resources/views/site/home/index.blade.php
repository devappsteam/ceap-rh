@extends('site.layout.app')
@section('content')
    <section class="slider container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div id="main_slider" class="carousel slide main-slider" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                        <li data-target="#main_slider" data-slide-to="1"></li>
                        <li data-target="#main_slider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://ceap.com.br/img/bg_main_slider.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://ceap.com.br/img/bg_main_slider.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://ceap.com.br/img/bg_main_slider.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#main_slider" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#main_slider" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="highlights py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md text-center mb-3 mb-md-0">
                    <a class="btn btn-primary btn-lg btn--highlights" href="#">Últimas<br>vagas</a>
                </div>
                <div class="col-12 col-md text-center mb-3 mb-md-0">
                    <a class="btn btn-primary btn-lg btn--highlights" href="#">Ver todas<br>as vagas</a>
                </div>
                <div class="col-12 col-md text-center mb-3 mb-md-0">
                    <a class="btn btn-primary btn-lg btn--highlights" href="{{ route('candidate.index') }}">Cadastrar<br>Currículo</a>
                </div>
                <div class="col-12 col-md text-center mb-3 mb-md-0">
                    <a class="btn btn-primary btn-lg btn--highlights" href="{{ route('school.create') }}">Cadastrar<br>Instituição</a>
                </div>
            </div>
        </div>
    </section>
    <section class="introduction" id="apresentacao">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="heading">Apresentação</h3>
                    <div class="introduction__content pb-5">Conteúdi Dinamico</div>
                </div>
            </div>
        </div>
    </section>
    <section class="account_register py-5" id="login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="heading">Login</h3>
                    <p>Já possui cadastro no CEAP-RH? Selecione uma das opções abaixo.</p>
                    <div class="row">
                        <div class="col-12 col-md text-center mb-3 mb-md-0">
                            <a class="btn btn-primary btn-lg btn--highlights w-70" href="#">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </div>
                                Sou Candidato
                            </a>
                        </div>
                        <div class="col-12 col-md text-center mb-3 mb-md-0">
                            <a class="btn btn-primary btn-lg btn--highlights w-70" href="#">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-briefcase">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </div>
                                Sou Instituição
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testmonies my-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    Depoimentos
                </div>
            </div>
        </div>
    </section>
    <section class="differentials py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="differentials__content">
                        <h4>
                            <div class="icon">icone</div>
                            Oportunidade
                        </h4>
                        <p class="text-muted">Grande oportunidade de ampliar o alcance do currículo</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="differentials__content">
                        <h4>
                            <div class="icon">icone</div>
                            Oportunidade
                        </h4>
                        <p class="text-muted">Grande oportunidade de ampliar o alcance do currículo</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="differentials__content">
                        <h4>
                            <div class="icon">icone</div>
                            Oportunidade
                        </h4>
                        <p class="text-muted">Grande oportunidade de ampliar o alcance do currículo</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="differentials__content">
                        <h4>
                            <div class="icon">icone</div>
                            Oportunidade
                        </h4>
                        <p class="text-muted">Grande oportunidade de ampliar o alcance do currículo</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="differentials__content">
                        <h4>
                            <div class="icon">icone</div>
                            Oportunidade
                        </h4>
                        <p class="text-muted">Grande oportunidade de ampliar o alcance do currículo</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-3 mb-md-0">
                    <div class="differentials__content">
                        <h4>
                            <div class="icon">icone</div>
                            Oportunidade
                        </h4>
                        <p class="text-muted">Grande oportunidade de ampliar o alcance do currículo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="heading">Clientes CEAP-RH</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 owl-carousel py-4">
                    <div class="clients__slider">
                        <div class="item text-center">
                            <img src="https://ceap.com.br/Api/upload/2022/02/08/6a17db1468355fcbf962e36fa8537cf5.png"
                                class="img-fluid">
                        </div>
                        <div class="item text-center">
                            <img src="https://ceap.com.br/Api/upload/2022/02/08/6006221c609e2486dd5b21063cfac2e0.png"
                                class="img-fluid">
                        </div>
                        <div class="item text-center">
                            <img src="https://ceap.com.br/Api/upload/2022/02/08/6858380c80311c1b70c264357bebdbaf.png"
                                class="img-fluid">
                        </div>
                        <div class="item text-center">
                            <img src="https://ceap.com.br/Api/upload/2022/02/08/a2b865da9e532a92984a93d0a2de920f.jpg"
                                class="img-fluid">
                        </div>
                        <div class="item text-center">
                            <img src="https://ceap.com.br/Api/upload/2022/02/03/24edc5252f55f8de8c1e06d94da9184a.png"
                                class="img-fluid">
                        </div>
                        <div class="item text-center">
                            <img src="https://ceap.com.br/Api/upload/2022/02/03/f4c6758c268006ea1e7854d6c8f9e51f.png"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 clients--all">
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <h3 class="m-0">Instituições de todo o Brasil</h3>
                            <p class="text-muted">Temos atualmente mais de instituições, públicas e privadas,
                                cadastradas em nosso sistema.</p>
                        </div>
                        <div class="col-12 col-lg-3 d-flex align-items-center">
                            <a href="" class="btn btn-primary w-100">Conheça todos os Clientes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="system py-5" id="sistema_integrado">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="heading">Sistema Integrado</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 py-3">
                    <p>
                        O CEAP RH é uma empresa de Recursos Humanos com um sistema moderno de recrutamento e seleção
                        de profissionais exclusivo para a área de educação que inclui professores, direção,
                        coordenação em todos os níveis, pessoal administrativo, secretaria, financeiro TI e demais
                        setores necessários ao funcionamento de uma escola ou faculdade.
                        Para o profissional da área de ensino, seja o professor ou não-docente, o portal gera uma
                        grande oportunidade de divulgar o currículo, mantendo-o sempre atualizado e podendo-o manter
                        sempre disponível ao mercado educacional.
                    </p>
                    <p>
                        Seu currículo pode ser cadastrado diretamente <a href="">aqui</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="contact py-4" id="contato">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="heading">Fale Conosco</h3>
                    <form id="contact_form" action="#" method="post">
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label for="contact_name" class="label">Nome: <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="contact_name" id="contact_name" class="form-control" required
                                    maxlength="180">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label for="contact_email" class="label">E-mail: <span
                                        class="text-danger">*</span></label>
                                <input type="email" name="contact_email" id="contact_email" class="form-control" required
                                    maxlength="180">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label for="contact_message" class="label">Nome: <span
                                        class="text-danger">*</span></label>
                                <textarea name="contact_message" id="contact_message" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <button class="btn btn-primary">Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="heading">CEAP-RH</h3>
                    <p>Cadastramento de Profissionais para área de educação e pesquisa de currículos pelas escolas e
                        faculdades da rede particular de ensino.</p>
                    <br>
                    <p>Adquira uma franquia do CEAP RH entrando em contato pelo fone <b>(41) 3082-6679</b>.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
