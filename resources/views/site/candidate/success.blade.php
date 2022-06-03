@extends('site.layout.app')
@section('content')
    <section class="success container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="card">
                    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                        <i class="checkmark">✓</i>
                    </div>
                    <h1>Parabéns</h1>
                    <p>Cadastro efetuado com sucesso!<br /> Seus dados já estão sendo analisados.</p>
                    <p>Fique tranquilo que iremos lhe avisar, obrigado!</p>
                    <a href="{{ route('home') }}" class="btn btn-success btn-lg mt-4">Página Inicial</a>
                </div>
            </div>
        </div>
    </section>
@endsection
