@extends('site.layout.app')
@section('content')
    <section class="candidate container py-5">
        <div class="row">
            <div class="col-12">
                <h3 class="heading">Resumo Curricular</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('components.alerts')
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="" id="form_candidate" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div id="candidate_wizard">
                        <ul class="nav">
                            <li>
                                <a class="nav-link" href="#personal_data">
                                    Dados Pessoais
                                </a>
                            </li><!-- personal_data -->
                            <li>
                                <a class="nav-link" href="#interests">
                                    Interesses
                                </a>
                            </li><!-- interests -->
                            <li>
                                <a class="nav-link" href="#experiences">
                                    Experiência
                                </a>
                            </li><!-- experiences -->
                            <li>
                                <a class="nav-link" href="#formations">
                                    Formação
                                </a>
                            </li><!-- formations -->
                            <li>
                                <a class="nav-link" href="#postgraduations">
                                    Pos-Graduações
                                </a>
                            </li><!-- postgraduations -->
                            <li>
                                <a class="nav-link" href="#courses">
                                    Cursos Extras
                                </a>
                            </li><!-- courses -->
                            <li>
                                <a class="nav-link" href="#languages">
                                    Idiomas
                                </a>
                            </li><!-- languages -->
                        </ul>

                        <div class="tab-content">
                            <div id="personal_data" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12">
                                        <h4 class="form-title">Informações Pessoais</h4>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="name" class="form-label">Nome <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Digite seu nome completo" required>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="email" class="form-label">E-mail <span
                                                class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Digite seu e-mail" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="name" class="form-label">Sexo <span
                                                class="text-danger">*</span></label>
                                        <select name="sex" class="form-control" id="sex" required>
                                            <option value="">Selecione...</option>
                                            <option value="1">Feminino</option>
                                            <option value="2">Masculino</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="bithdate" class="form-label">Data de Nascimento <span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="bithdate" class="form-control" id="bithdate"
                                            placeholder="dd/mm/yyyy" required>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="cpf" class="form-label">CPF <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="cpf" class="form-control" id="cpf"
                                            placeholder="Digite o CPF" required>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="rg" class="form-label">RG <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="rg" class="form-control" id="rg"
                                            placeholder="Digite o RG" minlength="9" maxlength="12" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="marital_status" class="form-label">Estado Civil <span
                                                class="text-danger">*</span></label>
                                        <select name="marital_status" class="form-control" id="marital_status" required>
                                            <option value="">Selecione...</option>
                                            <option value="1">Casado(a)</option>
                                            <option value="2">Solteiro(a)</option>
                                            <option value="3">Divorcidado(a)</option>
                                            <option value="4">Viúvo(a)</option>
                                            <option value="5">Outros</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="hometown" class="form-label">Cidade Natal<span
                                                class="text-danger">*</span></label>
                                        <select name="hometown" class="ajax-search form-control selectpicker" id="hometown"
                                            data-live-search="true">
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="foreign" class="form-label w-100"></label>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" id="foreign" name="foreign">
                                            <label class="form-check-label" for="foreign">
                                                Sou Estrangeiro.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="ceap_notification" class="form-label w-100"></label>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" id="ceap_notification"
                                                name="ceap_notification" checked>
                                            <label class="form-check-label" for="ceap_notification">
                                                Receber notificações da Ceap.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <label for="personal_presentation" class="form-label">Apresentação
                                            Pessoal <span class="text-danger">*</span></label>
                                        <textarea name="personal_presentation" class="form-control" id="personal_presentation" rows="5" maxlength="1000"
                                            placeholder="Digite sua apresentação" required></textarea>
                                        <p class="text-right"><span id="personal_presentation_info">1000</span>
                                            caracteres restantes.</p>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12">
                                        <h4 class="form-title">Informações de Contato</h4>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="contact_number" class="form-label">Contato</label>
                                        <input type="text" class="form-control" id="contact_number"
                                            placeholder="Digite seu telefone">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="contact_type" class="form-label">Tipo</label>
                                        <select class="form-control" id="contact_type">
                                            <option value="" selected="">Selecione...</option>
                                            <option value="1">Comercial</option>
                                            <option value="2">Pessoal</option>
                                            <option value="3">Residencial</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-2 form-group">
                                        <label class="w-100 mb-4"></label>
                                        <button type="button" class="btn btn-success"
                                            id="btn_add_contact">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="contact_table">
                                            <thead>
                                                <tr>
                                                    <th>Número</th>
                                                    <th>Tipo</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="contact_empty">
                                                    <td colspan="3">
                                                        <p class="text-center">Nenhum contato cadastrado.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12">
                                        <h4 class="form-title">Endereço</h4>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="postcode" class="form-label">CEP <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="postcode" class="form-control" id="postcode"
                                            placeholder="Digite seu CEP" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="address" class="form-label">Endereço <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control" id="address"
                                            placeholder="Digite seu endereço" required>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="number" class="form-label">Número</label>
                                        <input type="text" name="number" class="form-control" id="number"
                                            placeholder="S/N">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="complement" class="form-label">Complemento</label>
                                        <input type="text" name="complement" class="form-control" id="complement"
                                            placeholder="Ex. Apt 124">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-lg-4 form-group">
                                        <label for="district" class="form-label">Bairro <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="district" class="form-control" id="district"
                                            placeholder="Digite o nome do bairro" required>
                                    </div>
                                    <div class="col-12 col-lg-4 form-group">
                                        <label for="city" class="form-label">Cidade <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control" id="city" required>
                                    </div>
                                    <div class="col-12 col-lg-4 form-group">
                                        <label for="state" class="form-label">Estado <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="state" class="form-control" id="state" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <h4 class="form-title">Fotos</h4>
                                        <div class="form-upload dropzone" id="photos_upload">
                                            <div class="dz-message" data-dz-message>
                                                <span>Clique ou arraste suas fotos aqui.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col-12">
                                        <h4 class="form-title">Vídeos</h4>
                                        <p>Url do Vídeo (Seu vídeo só será aprovado se possuir tempo inferior a 1 minuto)
                                        </p>
                                        <input type="url" class="form-control" id="video" name="video"
                                            placeholder="https://www.youtube.com/watch?v=zl9ptiy1rpg">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <h4 class="form-title">Áudio</h4>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="audio"
                                                accept=".mp3,.wav,.3gp">
                                            <label class="custom-file-label" for="audio">Selecione seu áudio...</label>
                                        </div>
                                    </div>
                                </div>


                            </div><!-- personal_data -->

                            <div id="interests" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12 col-lg-4 form-group">
                                        <label for="interest_job" class="form-label">Interesse</label>
                                        <select class="form-control ajax-search selectpicker" id="interest_job"
                                            data-live-search="true" title="Selecione..."></select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label class="form-label w-100">Salário em</label>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="interest_type"
                                                id="interest_hour" value="hour">
                                            <label class="form-check-label" for="interest_hour">Hora</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio" name="interest_type"
                                                id="interest_month" value="month" checked>
                                            <label class="form-check-label" for="interest_month">Mês</label>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label class="form-label">Pretensão Salarial</label>
                                        <input type="text" class="form-control" id="interest_price"
                                            placeholder="R$ 1.200,00">
                                    </div>
                                    <div class="col-12 col-lg-2 form-group">
                                        <label class="w-100"></label>
                                        <button type="button" class="btn btn-success mt-2"
                                            id="btn_interest_add">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="interest_table">
                                            <thead>
                                                <tr>
                                                    <th>Interesse</th>
                                                    <th>Pretensão Salarial</th>
                                                    <th>Tipo</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="interest_empty">
                                                    <td colspan="4">
                                                        <p class="text-center mb-0">
                                                            Nenhum interesse adicionado.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- interests -->

                            <div id="experiences" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="experience_job" class="form-label">Cargo</label>
                                        <select id="experience_job" class="form-control ajax-search selectpicker"
                                            data-live-search="true" title="Selecione..."></select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="experience_start" class="form-label">Entrada</label>
                                        <input type="date" id="experience_start" class="form-control">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="experience_end" class="form-label">Saída</label>
                                        <input type="date" id="experience_end" class="form-control">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="experience_institution" class="form-label">Instituição</label>
                                        <input type="text" id="experience_institution" class="form-control"
                                            placeholder="Digite o nome da instituição">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                        <label class="form-label w-100">Deixar público o nome da instituição?</label>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio"
                                                name="experience_institution_public" id="institution_public_yes"
                                                value="yes">
                                            <label class="form-check-label" for="institution_public_yes">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline mt-2">
                                            <input class="form-check-input" type="radio"
                                                name="experience_institution_public" id="institution_public_no" value="no"
                                                checked>
                                            <label class="form-check-label" for="institution_public_no">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="experience_activities" class="form-label">Atividades
                                            Exercidas</label>
                                        <textarea id="experience_activities" class="form-control" rows="5"
                                            placeholder="Descreva as atividades exercidas"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 mb-2">
                                        <button type="button" class="btn btn-success"
                                            id="btn_experience_add">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="experience_table">
                                            <thead>
                                                <tr>
                                                    <th>Função</th>
                                                    <th>Entrada</th>
                                                    <th>Saída</th>
                                                    <th>Instituição</th>
                                                    <th>At. Exercidas</th>
                                                    <th>Público</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="experience_empty">
                                                    <td colspan="7">
                                                        <p class="text-center">Nenhuma experiência adicionada.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- experiences -->

                            <div id="formations" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="formation_course" class="form-label">Curso</label>
                                        <input type="text" id="formation_course" class="form-control"
                                            placeholder="Digite o nome do curso">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="formation_type" class="form-label">Tipo</label>
                                        <select id="formation_type" class="form-control">
                                            <option selected value="">Selecione...</option>
                                            <option value="1">Ens. Fund. Incompleto Até</option>
                                            <option value="2">Ens. Fund. Cursando</option>
                                            <option value="3">Ens. Fund. Completo</option>
                                            <option value="4">Ens. Médio Incompleto Até</option>
                                            <option value="5">Ens. Médio Cursando</option>
                                            <option value="6">Ens. Médio Completo</option>
                                            <option value="7">Ens. Superior Incompleto Até</option>
                                            <option value="8">Ens. Superior Cursando</option>
                                            <option value="9">Ens. Superior Completo</option>
                                            <option value="10">Especialização Incompleto Até</option>
                                            <option value="11">Especialização Cursando</option>
                                            <option value="12">Especialização Completo</option>
                                            <option value="13">Mestrado Incompleto Até</option>
                                            <option value="14">Mestrado Cursando</option>
                                            <option value="15">Mestrado Completo</option>
                                            <option value="16">Doutorado Incompleto Até</option>
                                            <option value="17">Doutorado Cursando</option>
                                            <option value="18">Doutorado Completo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="formation_institution" class="form-label">Instituição</label>
                                        <input type="text" id="formation_institution" class="form-control"
                                            placeholder="Digite o nome da instituição">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="formation_period" class="form-label">Período</label>
                                        <input type="number" id="formation_period" class="form-control" min="1"
                                            value="1">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="formation_conclusion" class="form-label">Ano de Conclusão</label>
                                        <input type="number" id="formation_conclusion" class="form-control" min="1900"
                                            max="2099" step="1" value="{{ date('Y') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 mb-2">
                                        <button type="button" class="btn btn-success"
                                            id="btn_formation_add">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="formation_table">
                                            <thead>
                                                <tr>
                                                    <th>Curso</th>
                                                    <th>Tipo</th>
                                                    <th>Instituição</th>
                                                    <th>Período</th>
                                                    <th>Ano de Conclusão</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="formation_empty">
                                                    <td colspan="6">
                                                        <p class="text-center">Nenhuma formação adicionada.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- formations -->

                            <div id="postgraduations" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="postgraduate_name" class="form-label">Nome</label>
                                        <input type="text" id="postgraduate_name" class="form-control"
                                            placeholder="Digite o nome da pós-graduação">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="postgraduate_type" class="form-label">Tipo</label>
                                        <select id="postgraduate_type" class="form-control">
                                            <option selected value="">Selecione...</option>
                                            <option value="1">Especialização</option>
                                            <option value="2">Mestrado</option>
                                            <option value="3">Doutorado</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="postgraduate_institution" class="form-label">Instituição</label>
                                        <input type="text" id="postgraduate_institution" class="form-control"
                                            placeholder="Digite o nome da instituição">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="postgraduate_conclusion" class="form-label">Ano de
                                            Conclusão</label>
                                        <input type="number" id="postgraduate_conclusion" class="form-control" min="1900"
                                            max="2099" step="1" value="{{ date('Y') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-12 form-group">
                                        <label for="postgraduate_comment" class="form-label">Comentário</label>
                                        <textarea id="postgraduate_comment" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 mb-2">
                                        <button type="button" class="btn btn-success"
                                            id="btn_postgraduate_add">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="posgraduate_table">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Tipo</th>
                                                    <th>Instituição</th>
                                                    <th>Ano de Conclusão</th>
                                                    <th>Comentário</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="posgraduate_empty">
                                                    <td colspan="6">
                                                        <p class="text-center">Nenhuma pós-graduação adicionada.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- postgraduations -->

                            <div id="courses" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="course_name" class="form-label">Nome</label>
                                        <input type="text" id="course_name" class="form-control"
                                            placeholder="Digite o nome do curso">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="course_type" class="form-label">Tipo</label>
                                        <select id="course_type" class="form-control">
                                            <option selected value="">Selecione...</option>
                                            <option value="1">Realizado</option>
                                            <option value="2">Ministrado</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="course_institution" class="form-label">Instituição</label>
                                        <input type="text" id="course_institution" class="form-control"
                                            placeholder="Digite o nome da instituição">
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="course_conclusion" class="form-label">Ano de
                                            Conclusão</label>
                                        <input type="number" id="course_conclusion" class="form-control" min="1900"
                                            max="2099" step="1" value="{{ date('Y') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 col-lg-12 form-group">
                                        <label for="course_comment" class="form-label">Comentário</label>
                                        <textarea id="course_comment" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 mb-2">
                                        <button type="button" class="btn btn-success"
                                            id="btn_course_add">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="course_table">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Tipo</th>
                                                    <th>Instituição</th>
                                                    <th>Ano de Conclusão</th>
                                                    <th>Comentário</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="course_empty">
                                                    <td colspan="6">
                                                        <p class="text-center">Nenhum curso adicionado.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- courses -->

                            <div id="languages" class="tab-pane" role="tabpanel">
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group">
                                        <label for="language_name" class="form-label">Idioma</label>
                                        <select id="language_name" class="form-control ajax-search selectpicker"
                                            data-live-search="true" title="Selecione..."></select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label for="language_level" class="form-label">Nível</label>
                                        <select id="language_level" class="form-control">
                                            <option selected value="">Selecione...</option>
                                            <option value="1">Básico</option>
                                            <option value="2">Intermediário</option>
                                            <option value="3">Avançado</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-3 form-group">
                                        <label class="form-label w-100"></label>
                                        <button type="button" class="btn btn-success mt-2"
                                            id="btn_language_add">Adicionar</button>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 table-responsive">
                                        <table class="table" id="language_table">
                                            <thead>
                                                <tr>
                                                    <th>Idioma</th>
                                                    <th>Nível</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="language_empty">
                                                    <td colspan="3">
                                                        <p class="text-center">Nenhum idioma adicionado.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- languages -->

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
