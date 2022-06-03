@extends('site.layout.app')
@section('content')
<section class="candidate container py-5">
    <div class="row">
        <div class="col-12">
            <h3 class="heading">Cadastro de Instituição</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @include('components.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('school.store') }}" id="form_candidate" method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')

                <div class="form-row">
                    <div class="col-12 col-lg-3 form-group">
                        <label for="cnpj" class="form-label">CNPJ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="cnpj" placeholder="Digite o cnpj" required value="{{ old('cnpj') }}">
                    </div>
                    <div class="col-12 col-lg-9 form-group">
                        <label for="name" class="form-label">Nome da Instituição <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Digite o nome da instituição" required value="{{ old('name') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-8 form-group">
                        <label for="email" class="form-label">E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Digite o e-mail" required value="{{ old('email') }}">
                    </div>
                    <div class="col-12 col-lg-4 form-group">
                        <label for="phone" class="form-label">Telefone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="phone" placeholder="Digite o telefone com ddd" required value="{{ old('phone') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-lg-8 form-group">
                        <label for="director_name" class="form-label">Nome do Diretor <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="director_name" placeholder="Digite o nome do diretor" required value="{{ old('director_name') }}">
                    </div>
                    <div class="col-12 col-lg-4 form-group">
                        <label for="director_phone" class="form-label">Telefone do Diretor <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="director_phone"  placeholder="Digite o telefone do diretor" required value="{{ old('emdirector_phoneail') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-lg-4 form-group">
                        <label for="postcode" class="form-label">CEP <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="postcode" placeholder="Digite seu CEP" required value="{{ old('postcode') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-7 form-group">
                        <label for="address" class="form-label">Endereço <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Digite o endereço" required value="{{ old('address') }}">
                    </div>
                    <div class="col-12 col-lg-2 form-group">
                        <label for="address_number" class="form-label">Número</label>
                        <input type="text" class="form-control" name="address_number" placeholder="S/N" value="{{ old('address_number') }}">
                    </div>
                    <div class="col-12 col-lg-3 form-group">
                        <label for="address_complement" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="address_complement" placeholder="Digite o complemento" value="{{ old('address_complement') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-12 col-lg-4 form-group">
                        <label for="district" class="form-label">Bairro <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="district" placeholder="Digite o bairro" required value="{{ old('district') }}">
                    </div>
                    <div class="col-12 col-lg-4 form-group">
                        <label for="city" class="form-label">Cidade <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="city" placeholder="Digite a cidade" value="{{ old('city') }}">
                    </div>
                    <div class="col-12 col-lg-4 form-group">
                        <label for="state" class="form-label">Estado <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="state" placeholder="Digite o estado" value="{{ old('state') }}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-lg-4">
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="receive_email" name="receive_email" value="1" checked>
                            <label class="custom-control-label" for="receive_email">Receber e-mail da Ceap?</label>
                          </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 text-center">
                        <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
